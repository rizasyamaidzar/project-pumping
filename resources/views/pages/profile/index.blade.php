@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="flex items-center justify-evenly rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <!--  -->
            <div class="py-10">
                <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 dark:text-white">
                    Profile
                </h1>
                @include('alerts.success')
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    {{-- Start Biodata --}}

                    <h2 class="text-center mt-1 font-semibold dark:text-gray-300 text-xl">Biodata
                    </h2>
                    <input type="hidden" name="id" value="{{ $profil->id }}" id="">
                    {{-- jika role admin --}}
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        @foreach ($profil->admin as $admin)
                            <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                                <div class="w-full  mb-4 mt-6">
                                    <label for="" class="mb-2 dark:text-gray-300">Nama</label>
                                    <input type="text"
                                        class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                        name="nama" value="{{ $admin->nama }}">
                                </div>
                                <div class="w-full  mb-4 lg:mt-6">
                                    <label for="" class=" dark:text-gray-300">No HP</label>
                                    <input type="text"
                                        class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                        name="no_hp" value="{{ $admin->no_hp }}">
                                </div>
                            </div>
                        @endforeach
                        {{-- <h2 class="text-center mt-1 font-semibold dark:text-gray-300 text-xl">Akun
                        </h2>
                        <div class="w-full  mb-4 mt-6">
                            <label for="" class="mb-2 dark:text-gray-300">Usernam</label>
                            <input type="text"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                name="username" value="{{ $profil->username }}">
                        </div>
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">New Passwo</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="nama">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">No HP</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                            </div>
                        </div> --}}
                    @endif
                    {{-- jika role mother  --}}
                    @if (Auth::check() && Auth::user()->role === 'mother')
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <input type="hidden" name="mother_id" value="{{ $profil->mother->id }}">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">Nama</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="nama" value="{{ $profil->mother->nama }}">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">No HP</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="no_hp" value="{{ $profil->mother->no_hp }}">
                            </div>
                        </div>
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">Berat Badan</label>
                                <input type="number"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="berat_badan" value="{{ $profil->mother->berat_badan }}">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">Tinggi Badan</label>
                                <input type="number"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="tinggi_badan" value="{{ $profil->mother->tinggi_badan }}">
                            </div>
                        </div>
                        <div class="w-full  mb-4 lg:mt-6">
                            <label for="" class=" dark:text-gray-300">Umur</label>
                            <input type="number"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                name="umur" value="{{ $profil->mother->umur }}">
                        </div>

                        {{-- END Biodata  --}}
                        {{-- Start data si kecil  --}}
                        <h2 class="text-center font-semibold dark:text-gray-300 mt-5 text-xl">Data Bayi
                        </h2>
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">Nama Bayi</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="nama_bayi" value="{{ $baby->nama }}">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">Jenis Kelamin</label>
                                <input type="text"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="jenis_kelamin" value="{{ $baby->jenis_kelamin }}">
                            </div>
                        </div>

                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">Berat Badan Bayi</label>
                                <input type="number"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="berat_badan_bayi" value="{{ $baby->berat_badan }}">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">Tinggi Badan Bayi</label>
                                <input type="number"
                                    class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    name="tinggi_badan_bayi" value="{{ $baby->tinggi_badan }}">
                            </div>
                        </div>
                        {{-- END data si kecil --}}
                    @endif
                    <div class="w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">
                        <button type="submit" class="w-full p-4">Update</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
@endsection
