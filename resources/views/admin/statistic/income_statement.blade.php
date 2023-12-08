<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">

                <div class=" m-2 p-2">
                    <form method="POST" class="flex" action="/admin/statistic/income-statement">
                        @csrf
                        <x-text-input id="date" class="block  w-30 mr-4" type="date" name="start_date"
                            value="{{ $start_date }}" required autofocus autocomplete="date" />
                        <x-text-input id="date" class="block w-30 mr-4" type="date" name="end_date"
                            value="{{ $end_date }}" required autofocus autocomplete="date" />
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Submit</button>

                    </form>
                </div>
                <div class="m-2 p-2 ">
                    <form method="POST" class="flex" action="{{ route('admin.export-income-statistic') }}"
                        target="_blank">
                        @csrf
                        <x-text-input id="date" class="block  w-30 mr-4" type="date" name="start_date"
                            value="{{ $start_date }}" required autofocus autocomplete="date" />
                        <x-text-input id="date" class="block w-30 mr-4" type="date" name="end_date"
                            value="{{ $end_date }}" required autofocus autocomplete="date" />
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Export</button>

                    </form>
                </div>
            </div>


            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Table
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Guests
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Total
                                        </th>
                                        {{-- <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Edit</span>
                                        </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $id = 1;
                                    @endphp

                                    @foreach ($reservations as $reservation)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $id++ }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->name }}
                                            </td>

                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->email }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->ReservationDate }}
                                                {{ \Carbon\Carbon::parse($reservation->ReservationTime)->format('H:i') }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->table->name }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->seats }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $totalAmounts[$reservation->id] }}
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="p-2">
                            {{ $reservations->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
