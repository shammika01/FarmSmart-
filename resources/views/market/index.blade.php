<x-app-layout>

    <x-slot name="header">
        <h2
            class="flex items-center justify-center font-semibold text-2xl text-gray-800 dark:text-white  leading-tight mb-5">
            {{ __('FarmSmart Market') }}
        </h2>
    </x-slot>




    <div class="w-full">
        <section id="Projects"
            class="w-full mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-20 mt-10 mb-5">

            @foreach ($marketItem as $item)
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="{{ Storage::url($item->image) }}" alt="Product"
                            class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-900 mr-3 uppercase text-xs">Items Left : {{ $item->quantity }}</span>
                            <span hidden class="text-gray-900 mr-3 uppercase text-xs">Items Left :
                                {{ $item->id }}</span>
                            <p class="text-lg font-bold text-black truncate block capitalize">{{ $item->name }}</p>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">Rs.{{ $item->price }}</p>
                                <div class="ml-auto">
                                    <button class="cartAdd" data-product-id="{{ $item->id }}"
                                        data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}"
                                        data-max-quantity="{{ $item->quantity }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </section>
    </div>


    <div
        class="flex min-h-auto items-center justify-center rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <h2
            class="flex items-center justify-center font-semibold text-l text-gray-800 dark:text-white  leading-tight mb-5">
            {{ __('FarmSmart Cart') }}
        </h2>
    </div>
    <div
        class="flex min-h-auto items-center justify-center rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-900">
        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5">
                <table id="cartTable" class="w-full text-sm text-left text-gray-500 dark:text-white">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="cartTableBody">
                        <!-- Cart items will be displayed here -->
                    </tbody>
                </table>
                <form id="checkoutForm" action="{{ route('market.cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="cartData" id="cartData">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 align-items: center justify-center">
                        Checkout
                    </button>
                </form>
            </div>
        </div>

    </div>








    <script>
        kofiWidgetOverlay.draw('mohamedghulam', {
            'type': 'floating-chat',
            'floating-chat.donateButton.text': 'Support me',
            'floating-chat.donateButton.background-color': '#323842',
            'floating-chat.donateButton.text-color': '#fff'
        });
    </script>

    <script>
        // Define the cart variable at a higher scope
        const cart = {};

        // Function to update the cart table
        function updateCartTable() {
            const cartTableBody = document.getElementById("cartTableBody");
            cartTableBody.innerHTML = ""; // Clear existing items in the table

            for (const productId in cart) {
                const cartItem = cart[productId];
                const itemPrice = cartItem.price * cartItem.quantity;

                const row = document.createElement("tr");
                row.innerHTML = `
            <td class="w-32 p-4">
                <!-- Add your product image here -->
            </td>
            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                ${cartItem.name}
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center space-x-3">
                    <button class="incrementQuantity" data-product-id="${productId}">+</button>
                    <div>
                        <span>${cartItem.quantity}</span>
                    </div>
                    <button class="decrementQuantity" data-product-id="${productId}">-</button>
                </div>
            </td>
            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                $${itemPrice.toFixed(2)}
            </td>
            <td class="px-6 py-4">
                <button class="removeCartItem" data-product-id="${productId}">Remove</button>
            </td>
        `;

                cartTableBody.appendChild(row);
            }
        }

        // Function to add an item to the cart
        function addToCart(productId, productName, productPrice) {
            if (!cart[productId]) {
                cart[productId] = {
                    name: productName,
                    price: productPrice,
                    quantity: 1,
                };
            } else {
                cart[productId].quantity++;
            }

            // Update the cart table
            updateCartTable();
        }

        // Add click event listeners to "Add to Cart" buttons
        const cartAddButtons = document.querySelectorAll(".cartAdd");
        cartAddButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const productId = button.getAttribute("data-product-id");
                const productName = button.getAttribute("data-product-name");
                const productPrice = parseFloat(button.getAttribute("data-product-price"));
                addToCart(productId, productName, productPrice);
            });
        });

        // Add event listeners for incrementing and decrementing quantity
        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("incrementQuantity")) {
                const productId = event.target.getAttribute("data-product-id");
                if (cart[productId]) {
                    cart[productId].quantity++;
                    updateCartTable();
                }
            } else if (event.target.classList.contains("decrementQuantity")) {
                const productId = event.target.getAttribute("data-product-id");
                if (cart[productId] && cart[productId].quantity > 0) {
                    cart[productId].quantity--;
                    updateCartTable();
                }
            }
        });

        // Add event listeners for removing cart items
        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("removeCartItem")) {
                const productId = event.target.getAttribute("data-product-id");
                if (cart[productId]) {
                    delete cart[productId];
                    updateCartTable();
                }
            }
        });

        // Update the cart data in the hidden input field when the form is submitted
        const checkoutForm = document.getElementById("checkoutForm");
        checkoutForm.addEventListener("submit", function() {
            const cartDataInput = document.getElementById("cartData");
            cartDataInput.value = JSON.stringify(cart);
        });
    </script>






</x-app-layout>
