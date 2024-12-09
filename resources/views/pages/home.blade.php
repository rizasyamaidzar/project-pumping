@extends('welcome')
@section('content')
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-evenly h-56 rounded bg-gray-50 dark:bg-gray-800">
            <div class="p-4 bg-blue-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12a4 4 0 106 0m-3 4v3m0 0H8m4 0h4M12 2a4 4 0 100 8 4 4 0 000-8z" />
                </svg>
            </div>
            <div class="px-4 text-gray-700">
                <h3 class="md:text-lg tracking-wider">Umur si kecil</h3>
                <p class="md:text-3xl">2 bulan</p>
            </div>
        </div>
        <div class="flex items-center justify-center h-56 rounded bg-gray-50 dark:bg-gray-800">

            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <div class="w-full mx-auto max-w-xl flex flex-col lg:h-svh justify-center py-24 lg:py-96 relative p-8">
                <div class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl">
                    <div>
                        <h1>Laporan Pumping hari ini</h1>
                        <p class="text-balance">09 Dec 2024</p>
                    </div>
                </div>
                <div class="mt-6 border-t pt-12">
                    <!-- Starts component -->
                    <div x-data="{ progress: 0, interval: null }" x-init="() => { interval = setInterval(() => { progress < 100 ? progress += 5 : clearInterval(interval); }, 100); }" class="w-full">
                        <div class="text-sm text-gray-500" x-text="progress + '%'">100%</div>
                        <div class="relative h-1 mt-2 bg-gray-200 rounded-full">
                            <div x-bind:style="'width: ' + progress + '%;'"
                                class="absolute top-0 left-0 h-full bg-blue-500 rounded-full" style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <!-- Ends component -->
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mb-4 rounded bg-blue-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-full md:rounded-none md:rounded-s-lg"
            src="{{ asset('img/anak.jpg') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            @if (Auth::check() && Auth::user()->role === 'admin')
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">
                    Hai ...., selamat datang kembali</h5>
            @endif
            @if (Auth::check() && Auth::user()->role === 'mother')
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">
                    Hai , selamat datang kembali</h5>
            @endif
            <p class="mb-3 font-normal text-white dark:text-gray-400">Nikmati setiap proses menyusui dan berikan setetes
                berkah pada si kecil..</p>
            <a href="/users"
                class="text-white text-center font-semibold bg-green-400 hover:bg-blue-800 hover:text-white focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tulis
                Laporan</a>
        </div>

    </div>
@endsection
