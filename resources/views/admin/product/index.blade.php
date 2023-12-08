<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.product.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New
                    Product</a>

            </div>
            <div class=" justify-start ">
                <input type="text" id="searchInput" placeholder="Type to search..."
                    class="flex justify-end p-2 max-w-xs">
                <ul id="resultsList" class=" p-2"></ul>
            </div>
            <div class="inline-block ">

            </div>

            <div class="inline-block ">

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
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Image
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Price
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Special price
                                        </th>
                                        <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $product->name }}

                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img src="{{ Storage::url($product->image) }}"
                                                    class="w-16 h-16 rounded">
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $product->price }}

                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $product->special_price }}

                                            </td>
                                            {{-- <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $hours }}

                                            </td> --}}
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                                    <form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                        method="POST"
                                                        action="{{ route('admin.product.destroy', $product->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            const searchInput = document.getElementById('searchInput');
            const resultsList = document.getElementById('resultsList');

            // Sample data for demonstration
            const data =

                [
                    @foreach ($products as $product)
                        {
                            name: '{{ $product->name }}',
                            link: '{{ route('admin.product.edit', $product->id) }}'
                        },
                    @endforeach


                ];

            // Function to filter data based on search input
            const filterData = (query) => {
                return data.filter(item => item.name.toLowerCase().includes(query.toLowerCase()));
            };

            // Function to update search results
            const updateResults = () => {
                const query = searchInput.value;
                const filteredData = filterData(query);

                // Clear previous results
                resultsList.innerHTML = '';

                // Display filtered results
                filteredData.forEach(item => {
                    const li = document.createElement('li');
                    const link = document.createElement('a');
                    link.textContent = item.name;
                    link.href = item.link;
                    link.target = '_blank'; // Open link in a new tab
                    li.appendChild(link);
                    resultsList.appendChild(li);
                });
            };

            // Event listener for input changes
            searchInput.addEventListener('input', updateResults);
        </script>

</x-admin-layout>
