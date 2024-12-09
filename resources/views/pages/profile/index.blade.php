@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="flex items-center justify-evenly rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <!--  -->
            <div class="py-10">
                <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 dark:text-white">
                    Profile
                </h1>
                <form>
                    {{-- Start Biodata --}}
                    <h2 class="text-center mt-1 font-semibold dark:text-gray-300">Biodata
                    </h2>
                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                        <div class="w-full  mb-4 mt-6">
                            <label for="" class="mb-2 dark:text-gray-300">First Name</label>
                            <input type="text"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                placeholder="First Name">
                        </div>
                        <div class="w-full  mb-4 lg:mt-6">
                            <label for="" class=" dark:text-gray-300">Last Name</label>
                            <input type="text"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                placeholder="Last Name">
                        </div>
                    </div>

                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                        <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Sex</h3>
                            <select
                                class="w-full text-grey border-2 rounded-lg p-4 pl-2 pr-2 dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                <option disabled value="">Select Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Date Of Birth</h3>
                            <input type="date"
                                class="text-grey p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                        </div>
                    </div>

                    {{-- END Biodata  --}}
                    {{-- Start data si kecil  --}}
                    <h2 class="text-center font-semibold dark:text-gray-300 mt-5">Data Si kecil
                    </h2>
                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                        <div class="w-full  mb-4 mt-6">
                            <label for="" class="mb-2 dark:text-gray-300">First Name</label>
                            <input type="text"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                placeholder="First Name">
                        </div>
                        <div class="w-full  mb-4 lg:mt-6">
                            <label for="" class=" dark:text-gray-300">Last Name</label>
                            <input type="text"
                                class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                placeholder="Last Name">
                        </div>
                    </div>

                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                        <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Sex</h3>
                            <select
                                class="w-full text-grey border-2 rounded-lg p-4 pl-2 pr-2 dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                <option disabled value="">Select Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Date Of Birth</h3>
                            <input type="date"
                                class="text-grey p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                        </div>
                    </div>
                    {{-- END data si kecil --}}
                    <div class="w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">
                        <button type="submit" class="w-full p-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
@endsection
