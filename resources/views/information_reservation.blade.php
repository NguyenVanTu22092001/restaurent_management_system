<x-app-layout>
    <div class="form-header">
        <h1 class="h1 form-heading" style="color: #1C2C59 !important;">Your Information</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
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
                                        {{-- <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservationData->name }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservationData->email }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservationData->ReservationDate }}
                                            {{ \Carbon\Carbon::parse($reservationData->ReservationTime)->format('H:i') }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservationData->table->name }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reservationData->seats }}
                                        </td>
                                        {{-- <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <div class="flex space-x-2">
                                                <a href="" style="text-decoration: none;"
                                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white ">Order
                                                </a>
                                            </div>
                                        </td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-6 text-sm font-high">
                    <a href="/"><strong>I will order later</strong></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
