@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        @include('pages.report-pumping.profil')
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
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">1</td>
                            <td>{{ \Carbon\Carbon::parse($pumping->tanggal)->format('D') }}</td>
                            <td>{{ $pumping->tanggal }}</td>
                            <td>{{ $pumping->pd_kanan + $pumping->pd_kiri }}</td>
                            <td>
                                <a href="/report-pumping/{{ $pumping->tanggal }}/{{ $pumping->user_id }}"
                                    class="px-5 py-2 bg-green-500 rounded-lg text-white">View</a>
                            </td>
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
