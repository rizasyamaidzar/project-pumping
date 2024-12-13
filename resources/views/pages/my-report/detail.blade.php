@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <h1 class="my-2 mb-5 text-xl font-bold">Laporan Harian Pumping </h1>
        @include('alerts.success')
        <div class="flex items-center justify-evenly p-10 rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                No
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Hari
                            </span>
                        </th>
                        <th data-type="date" data-format="Month YYYY">
                            <span class="flex items-center">
                                Tanggal
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Pukul
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                menit
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                note
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                pd_kanan
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                pd_kiri
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Jumlah
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Action
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pumpings as $pumping)
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($pumping->tanggal)->format('D') }}</td>
                            <td>{{ $pumping->tanggal }}</td>
                            <td>{{ $pumping->pukul }}</td>
                            <td>{{ $pumping->menit }}</td>
                            <td>{{ $pumping->note }}</td>
                            <td>{{ $pumping->pd_kanan }}</td>
                            <td>{{ $pumping->pd_kiri }}</td>
                            <td>{{ $pumping->pd_kanan + $pumping->pd_kiri }}</td>
                            <td>
                                <div class="flex">
                                    <button data-modal-target="popup-edit-{{ $pumping->id }}"
                                        data-modal-toggle="popup-edit-{{ $pumping->id }}"
                                        class="block mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Edit
                                    </button>
                                    <button data-modal-target="popup-delete-{{ $pumping->id }}"
                                        data-modal-toggle="popup-delete-{{ $pumping->id }}"
                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Delete
                                    </button>
                                </div>
                            </td>
                            @include('pages.my-report.edit-modal')
                            @include('pages.my-report.delete-modal')
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <div class="flex items-center justify-center mb-4 rounded bg-blue-700">



    </div>
@endsection
@section('script')
    <script>
        if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#pagination-table", {
                paging: true,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25],
                sortable: false
            });
        }
    </script>
@endsection
