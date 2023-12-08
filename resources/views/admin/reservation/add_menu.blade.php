<x-admin-layout>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4">
                <?php
                $ecryptId = Crypt::encrypt($id);
                ?>

                <div class="row">
                    <div class="col d-flex ">
                        <a href="/admin/order/{{ $ecryptId }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">See detail</a>
                        <a href="/admin/print-order/{{ $ecryptId }}"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Print </a>

                    </div>
                </div>
            </div>
            <div class="add-menu">
                <div class="tab">

                    {{-- <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button> --}}
                    @foreach ($categories as $category)
                        <button class="tablinks"
                            onclick="openCity(event, '{{ $category->name }}')">{{ $category->name }}</button>
                    @endforeach
                </div>

                @foreach ($categories as $category)
                    <div id="{{ $category->name }}" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        <table class="min-w-full">
                            <tbody>
                                <form method="POST" action="{{ route('addfood') }}">
                                    <input type="hidden" value="{{ $id }}" name="reservation_id">
                                    @foreach ($category->products as $product)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $product->name }}

                                                {{-- {{ $product->description }} --}}
                                            </td>
                                            {{-- <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img src="{{ Storage::url($product->image) }}" class="w-20 h-30 rounded">
                                        </td> --}}
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                {{ $product->price }}
                                            </td>

                                            @csrf
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <input type="hidden" value="{{ $product->id }}" name="product_ids[]">

                                                <input
                                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1"
                                                    type="number" style="position: static;  color:black;"
                                                    name="quantities[]" min="0" id="" value="0">
                                            </td>

                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2">

                                                    <button type="submit" value="{{ $product->id }}">Add
                                                        Food</button>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                        {{-- @foreach ($category->products as $product)
                            <li>
                                <h3>{{ $product->name }}</h3>
                                <p>Description: {{ $product->description }}</p>
                                <p>Price: ${{ $product->price }}</p>
                                <!-- Add more product information as needed -->
                            </li>
                        @endforeach --}}

                    </div>
                @endforeach
            </div>
        </div>

    </div>


    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</x-admin-layout>
