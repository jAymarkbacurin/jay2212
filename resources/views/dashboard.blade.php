<x-app-layout>
    <x-slot name="header">


        @php
            $success = null;
            if (session('status')) {
                $success = session('status');
            }
        @endphp

    </x-slot>
    @php
        $users = \App\Models\User::all();
    @endphp
    <div class="py-12 bg-slate-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class=" p-3 sm:p-5">
                        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                            <!-- Start coding here -->
                            <div
                                class="bg-slate-900 border-yellow-500 border-[2px] relative shadow-2xl sm:rounded-lg overflow-hidden p-[2rem]">
                                <div
                                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                    <div class="w-full md:w-1/2">
                                        <form class="flex items-center ">
                                            <label for="simple-search" class="sr-only">Search</label>
                                            <div class="relative w-full">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg aria-hidden="true"
                                                        class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                        fill="currentColor" viewbox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <input type="text" id="simple-search"
                                                    class="bg-white border border-yellow-500 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-slate-900 dark:border-yellow-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Search" required="">
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                                        <div class="flex items-center space-x-3 w-full md:w-auto">
                                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-slate-900 dark:text-gray-400 dark:border-yellow-600 dark:hover:text-white dark:hover:bg-gray-700"
                                                type="button">
                                                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                </svg>
                                                Actions
                                            </button>
                                            <div id="actionsDropdown"
                                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="actionsDropdownButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                                                            Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#"
                                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                                        all</a>
                                                </div>
                                            </div>
                                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-slate-900 dark:text-gray-400 dark:border-yellow-600 dark:hover:text-white dark:hover:bg-gray-700"
                                                type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Filter
                                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                </svg>
                                            </button>
                                            <div id="filterDropdown"
                                                class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                                    Choose brand</h6>
                                                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                    <li class="flex items-center">
                                                        <input id="apple" type="checkbox" value=""
                                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="apple"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple
                                                            (56)</label>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <input id="fitbit" type="checkbox" value=""
                                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="fitbit"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft
                                                            (16)</label>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <input id="razor" type="checkbox" value=""
                                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="razor"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor
                                                            (49)</label>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <input id="nikon" type="checkbox" value=""
                                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="nikon"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon
                                                            (12)</label>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <input id="benq" type="checkbox" value=""
                                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="benq"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ
                                                            (74)</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">id</th>
                                                <th scope="col" class="px-4 py-3">Name</th>
                                                <th scope="col" class="px-4 py-3">Email</th>
                                                <th scope="col" class="px-4 py-3">
                                                    <span class="sr-only">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="border-b dark:border-gray-700">
                                                    <th scope="row"
                                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $user->id }}</th>
                                                    <td class="px-4 py-3">{{ $user->name }}</td>
                                                    <td class="px-4 py-3">{{ $user->email }}</td>

                                                    <td class="px-4 py-3 flex items-center justify-end">


                                                        <a href="{{ route('Showuserdetail', 'id=' . $user->id) }}"
                                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-slate-900 hover:border-yellow-600 border-slate-900 border-[1px] rounded-lg dark:hover:text-white
                                                            transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">Show</a>

                                                        <a href="{{ route('Edituser', 'id=' . $user->id) }}"
                                                            class="block py-2 px-4 hover:bg-gray-100  dark:hover:bg-slate-900  hover:border-yellow-600 border-slate-900 border-[1px] rounded-lg dark:hover:text-white
                                                            transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">Edit</a>

                                                        <a href="{{ route('deleteuser', 'id=' . $user->id) }}"
                                                            class="block py-2 px-4 hover:bg-gray-100  dark:hover:bg-slate-900  hover:border-yellow-600 border-slate-900 border-[1px] rounded-lg dark:hover:text-white
                                                            transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">Delete</a>

                                </div>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>

                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
