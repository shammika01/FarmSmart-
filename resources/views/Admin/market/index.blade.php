<x-admin-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left  text-gray-500s dark:text-white dark:text-white">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                <tr>
                    <th scope="col" class="p-4">
                        {{-- <div class="flex items-center">
                            <label id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div> --}}
                    </th>

                    <div class="flex justify-end m-2 p-2">
                        <a href="{{ route('admin.market.create') }}"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            Add New</a>

                    </div>

                    <th scope="col" class="px-6 py-3">
                        Item ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Weight
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            {{-- <div class="flex items-center">
                                <label id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div> --}}
                        </td>

                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900s dark:text-white whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </th>
                        <td
                            class="py-4 px-6 text-sm font-medium text-gray-900s dark:text-white whitespace-nowrap dark:text-white">
                            <img src="{{ Storage::url($item->image) }}" alt="item Image" class=" h-16 w-25 rounded-lg">

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->price }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            Yes --}}
                        {{-- </td>
                    <td class="px-6 py-4">
                        Yes
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        3.0 lb.
                    </td> --}}
                        <td class="px-6 py-4 ">
                            <a href="{{ route('admin.market.edit', ['market' => $item->id]) }}"
                                class=":text-blue-500 font-medium text-blue-600 hover:underline">Edit</a>

                            <form method="POST" action="{{ route('admin.market.destroy', $item->id) }}"
                                onsubmit="return confirm('Are you sure you want to delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-admin-layout>
