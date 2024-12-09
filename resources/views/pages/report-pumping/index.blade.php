@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
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
                                Nama
                            </span>
                        </th>
                        <th data-type="date" data-format="Month YYYY">
                            <span class="flex items-center">
                                Usia
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
                    @foreach ($datas as $data)
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">1</td>
                            <td>{{ $data->mother->nama }}</td>
                            <td> {{ round(\Carbon\Carbon::parse($data->mother->child->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now())) }}
                                bulan</td>
                            <td>{{ $data->username }}</td>
                            <td>
                                <a href="/report-pumping/{1}" class="px-5 py-2 bg-green-500 rounded-lg text-white">View</a>
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
