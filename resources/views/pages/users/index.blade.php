@extends('welcome')
@section('content')
    @include('alerts.success')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="flex items-center justify-evenly p-10 rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                NO
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Nama
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                No_hp
                            </span>
                        </th>
                        <th class="mx-auto">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listUser as $list)
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}
                            </td>
                            <td>{{ $list->nama }}</td>
                            <td>{{ $list->no_hp }}</td>
                            <td>
                                <div class="flex mx-auto">
                                    <form action="/users-management" method="POST">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $list->user_id }}">
                                        @if ($list->user->status)
                                            <input type="hidden" name="status" value="0">
                                            <button
                                                onclick="return confirm('Apakah Anda Yakin Mengubah Status Keanggotaan {{ $list->nama }} ? ')"
                                                type="submit" class="mx-auto bg-green-500 text-white p-2  w-32 rounded-lg">
                                                Aktif
                                            </button>
                                        @else
                                            <input type="hidden" name="status" value="1">
                                            <button
                                                onclick="return confirm('Apakah Anda Yakin Mengubah Status Keanggotaan {{ $list->nama }} ? ')"
                                                type="submit" class="mx-auto bg-red-500 text-white w-32 p-2 rounded-lg">
                                                Tidak Aktif
                                            </button>
                                        @endif
                                    </form>

                                    <button data-modal-target="popup-delete-{{ $list->id }}"
                                        data-modal-toggle="popup-delete-{{ $list->id }}"
                                        class="block mx-5  w-32 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Delete
                                    </button>
                                </div>
                            </td>
                            @include('pages.users.edit-modal')
                            @include('pages.users.delete-modal')
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
