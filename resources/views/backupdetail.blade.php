<x-app-layout>
    <x-slot name="header" >



        @php
            $success = null;
            if (session('status')) {
                $success = session('status');
            }
        @endphp

    </x-slot>
    <section class=" p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div
                class="bg-slate-900 border-yellow-500 border-[2px] relative shadow-2xl sm:rounded-lg overflow-hidden p-[2rem]">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <a href="{{ route('Runbackup') }}">
                            <button type="submit" class="text-yellow-500 hover:text-white mx-[2rem]   hover:border-yellow-600 border-slate-900 border-b-[1px]  text-center py-[6px] text-[13px]   transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">BACKUP
                            </button>
                        </a>
                        <a href="{{ route('Runbackup') }}">
                            <button type="submit" class="text-yellow-500  hover:text-white hover:border-yellow-600 border-slate-900 border-b-[1px]  text-center py-[6px] text-[13px]   transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">RECOVER
                            </button>
                        </a>

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">


                        </thead>
                        <tbody>


                </tbody>
                </table>
            </div>

        </div>
</div>
</section>
</x-app-layout>
