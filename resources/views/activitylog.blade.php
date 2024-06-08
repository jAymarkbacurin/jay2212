<x-app-layout>
    <x-slot name="header">



        @php
            $success = null;
            if (session('status')) {
                $success = session('status');
            }

            $activity = \App\Models\AuditTrail::query()->where('user_id', auth()->user()->id)->get();

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
                     
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">
                            <tr>
                                <th class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">Activity</th>
                                <th class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">Type</th>
                                <th class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">User ID</th>
                                <th class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">Date</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($activity as $item)
                                <tr>
                                    <td class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">{{ $item->activity }}</td>
                                    <td class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">{{ $item->type }}</td>
                                    <td class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">{{ $item->user_id }}</td>
                                    <td class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">{{ $item->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
