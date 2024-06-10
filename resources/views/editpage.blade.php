<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class=" p-3 sm:p-5">
                        <div class=" max-w-screen-xl px-4 lg:px-12">
                            <!-- Start coding here -->
                            <div
                                class="bg-slate-900 border-yellow-500 border-[2px] relative shadow-2xl sm:rounded-lg overflow-hidden p-[2rem]">
                                <div
                                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                    <div class="w-full md:w-1/2">
                                        <a>
                                            <button type="submit"
                                                class="text-yellow-500 hover:text-white mx-[2rem]   hover:border-yellow-600 border-slate-900 border-b-[1px]  text-center py-[6px] text-[13px]   transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">EDIT
                                                USER
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="">
                                    <section class="p-3 sm:p-5">
                                        <form action="{{ route('Showuserdetail') }}" method="post"
                                            class="shadow-2xl max-w-md mb-[2rem] border-yellow-600 border-[2px]  dark:bg-slate-900 p-[4rem]">
                                            @csrf
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input value='{{ $user->id }}' type="number" name="id"
                                                    id="id"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required />
                                                <label for="id"
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ID</label>
                                            </div>
                                            <div class="relative z-0 w-full  group my-[2rem]">
                                                <input value='{{ $user->name }}'
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required />
                                                <label for="name"
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input value='{{ $user->email }}' type="text" name="email"
                                                    id="email"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " required />
                                                <label for="email"
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                            </div>

                                            <button type="submit"
                                                class="text-white bg-slate-900 border-yellow-600 border-[1px] px-[3rem]  text-center py-[6px] text-[13px]   transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">SUBMIT</button>
                                        </form>

                                    </section>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
