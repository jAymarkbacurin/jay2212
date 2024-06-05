<x-app-layout>
    <x-slot name="header">
        @php
            $success = null;
            if (session('status')) {
                $success = session('status');
            }

        @endphp
    </x-slot>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div
                class="bg-slate-900 border-yellow-500 border-[2px] relative shadow-2xl sm:rounded-lg overflow-hidden p-[2rem]">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b-[2px] border-yellow-500 ">
                    <div class="w-full md:w-1/2">
                        <a href="{{ route('Runbackup') }}">
                            <button type="submit"
                                class="text-yellow-500 hover:text-white mx-[2rem] hover:border-yellow-600 border-slate-900 border-b-[1px] text-center py-[6px] text-[13px] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">BACKUP</button>
                        </a>
                        <a href="{{ route('Runbackup') }}">
                            <button type="submit"
                                class="text-yellow-500 hover:text-white hover:border-yellow-600 border-slate-900 border-b-[1px] text-center py-[6px] text-[13px] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">RECOVER</button>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left ">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-gray-400 border-b-[1px] border-yellow-500 rounded-lg">
                        </thead>
                        <tbody>
                            @if (count($backups))
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>File</th>
                                            <th>Size</th>
                                            <th>Date</th>
                                            <th>Age</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($backups as $backup)
                                            <tr>
                                                <td>{{ $backup['file_name'] }}</td>
                                                <td>{{ $backup['file_size'] }}</td>
                                                <td>{{ date('d/M/Y, g:ia', strtotime($backup['last_modified'])) }}</td>
                                                <td>{{ $backup['last_modified'] }}</td>
                                                <!-- Here we use the diff_date_for_humans function -->
                                                <td class="text-right">
                                                    <a class="btn btn-primary"
                                                        href="{{ url('backup/download/' . $backup['file_name']) }}"><i
                                                            class="fas fa-cloud-download"></i> Download</a>
                                                    <a class="btn btn-xs btn-danger" data-button-type="delete"
                                                        href="{{ url('backup/delete/' . $backup['file_name']) }}"><i
                                                            class="fal fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center py-5">
                                    <h1 class="text-muted">No existen backups</h1>
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
