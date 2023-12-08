<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="flex-shrink-0 w-2/3 p-4">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <div class="row" x-data="handler()">
                                    <div class="col">
                                        {{-- <table class="table table-bordered align-items-center table-sm">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Quantity
                                                    </th>
                                                    <th scope="col"
                                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Date
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['OrderItems'] as $orderItem)
                                                    <template x-for="(field, index) in fields" :key="index">

                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                            <td x-text="index + 1" scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                            </td>
                                                            <td scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                                {{ $orderItem->product->name }}
                                                            </td>
                                                            <td scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                                {{ $orderItem->quantity }}
                                                            </td>
                                                            <td scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                <button type="button" class="btn btn-danger btn-small"
                                                                    @click="removeField(index)">&times;</button>
                                                            </td>
                                                        </tr>

                                                    </template>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4" class="text-right"><button type="button"
                                                            class="btn btn-info" @click="addNewField()">+ Add
                                                            Row</button></td>
                                                </tr>
                                            </tfoot>
                                        </table> --}}
                                    </div>
                                </div>
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Quantity
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Price
                                            </th>
                                            {{-- <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Action
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['OrderItems'] as $orderItem)
                                            <!-- Add more properties as needed -->

                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $orderItem->product->name }}

                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $orderItem->quantity }}

                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{-- {{ $orderItem->created_at->format('g:i d/m/Y ') }} --}}
                                                    {{ $orderItem->product->special_price }}$
                                                </td>
                                                {{-- <td scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    <button type="button" class="btn btn-danger btn-small"
                                                        @click="removeField(index)">&times;</button>
                                                </td> --}}
                                                {{-- <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                <div class="flex space-x-2">

                                                    <form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                        method="POST" action=""
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                    <a href="/admin/add-menu/{{ Crypt::encrypt($reservation->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Order</a>
                                                    <a href="/admin/checkout/{{ Crypt::encrypt($reservation->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Checkout</a>
                                                    <a href="/admin/print-bill/{{ Crypt::encrypt($reservation->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Print
                                                        Bill</a>
                                                </div>
                                            </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0 w-1/3 p-4">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">

                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Amount </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $total }}$
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                VAT(8%)
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $total * 0.08 }}$
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="p-0">
                                                <hr
                                                    class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Total
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $total * 1.08 }}$
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="flex justify-center m-5">
                                    <a href="/admin/print-bill/{{ Crypt::encrypt($reservationId) }}">
                                        <button id="successButton" data-modal-target="successModal"
                                            data-modal-toggle="successModal"
                                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"
                                            type="button">
                                            Checkout
                                        </button>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin-layout>
