<x-app-layout>
    <x-slot name="header">
        <h2
            class="flex items-center justify-center font-semibold text-2xl text-gray-800 dark:text-white  leading-tight mb-5">
            {{ __('FarmSmart Market') }}
        </h2>
    </x-slot>

    <h2 class="flex items-center justify-center font-semibold text-xl text-gray-800 dark:text-white  leading-tight mb-5">
        {{ __('Checkout') }}
    </h2>


    <div
        class="flex min-h-auto items-center justify-center rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-900">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5">
            <table id="cartTable" class="w-full text-sm text-left text-gray-500 dark:text-white">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                    <tr>
                        {{-- <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Image</span>
                            </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Qty
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                                Action
                            </th> --}}
                    </tr>
                </thead>
                <tbody id="cartTableBody">@php
                    $totalPrice = 0; // Initialize the total price
                @endphp
                    @foreach ($cartData as $productId => $cartItem)
                        @php
                            // Calculate the item's total price
$itemTotalPrice = $cartItem['price'] * $cartItem['quantity'];
// Add the item's total price to the total
                            $totalPrice += $itemTotalPrice;
                        @endphp
                        <tr>
                            {{-- <td class="w-32 p-4">
                                </td> --}}
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $cartItem['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <!-- Display quantity and increment/decrement buttons here -->
                                    {{-- <button class="incrementQuantity" data-product-id="{{ $productId }}">+</button> --}}
                                    <div>
                                        <span>{{ $cartItem['quantity'] }}</span>
                                    </div>
                                    {{-- <button class="decrementQuantity" data-product-id="{{ $productId }}">-</button> --}}
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                Rs. {{ number_format($cartItem['price'] * $cartItem['quantity'], 2) }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                    <button class="removeCartItem" data-product-id="{{ $productId }}">Remove</button>
                                </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <h2
        class="flex items-center justify-center font-semibold text-xl text-gray-800 dark:text-white  leading-tight mb-5 mt-4">
        Total: Rs. {{ number_format($totalPrice, 2) }}
    </h2>



    <div class="w-full max-w-lg mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-medium mb-6">Payment Information</h2>
            <form>
                <div class="grid grid-cols-2 gap-6 ">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="card-number"
                            class="block text-sm font-medium text-gray-700 dark:text-white mb-2 dark:text-white">Card
                            Number</label>
                        <input type="text" name="card-number" id="card-number" placeholder="0000 0000 0000 0000"
                            class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="expiration-date"
                            class="block text-sm font-medium text-gray-700 dark:text-white mb-2">Expiration
                            Date</label>
                        <input type="text" name="expiration-date" id="expiration-date" placeholder="MM / YY"
                            class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="cvv"
                            class="block text-sm font-medium text-gray-700 dark:text-white mb-2">CVV</label>
                        <input type="text" name="cvv" id="cvv" placeholder="000"
                            class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="card-holder"
                            class="block text-sm font-medium text-gray-700 dark:text-white mb-2">Card
                            Holder</label>
                        <input type="text" name="card-holder" id="card-holder" placeholder="Full Name"
                            class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                </div>
                <div class="mt-8">
                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-blue-600 text-white font-medium py-3 rounded-lg focus:outline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
