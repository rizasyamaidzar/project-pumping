@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="flex items-center justify-evenly p-10 rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                Model Name
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Developer
                            </span>
                        </th>
                        <th data-type="date" data-format="Month YYYY">
                            <span class="flex items-center">
                                Release Date
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Parameters
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Primary Application
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GPT-4</td>
                        <td>OpenAI</td>
                        <td>March 2023</td>
                        <td>1 trillion</td>
                        <td>Natural Language Processing</td>
                    </tr>

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
