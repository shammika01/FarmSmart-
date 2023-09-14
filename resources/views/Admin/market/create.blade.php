<x-admin-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.market.index') }}"
                class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Close</a>

        </div>

        <div class="m-2 p-2">
            <form method="POST" action="{{ route('admin.market.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <div>
                        <label for="">Name</label>
                        <input id="name" class="block mb-5 mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                    </div>


                    <div class="mb-6 ">
                        <div class="">
                            <label for="">Quantity</label>
                            <input id="quantity" class="block mb-5 mt-1 w-full" type="number" name="quantity"
                                :value="old('quantity')" required autofocus autocomplete="quantity" />
                        </div>



                        <div class="mb-6">
                            <div>
                                <label for="">Price</label>
                                <input id="price" class="block mb-5 mt-1 w-full" type="number" name="price"
                                    :value="old('price')" required autofocus autocomplete="price" />
                            </div>

                            <div class="mb-6">


                                <div class="mb-6">
                                    <label
                                        class=":text-white mb-2 block mb-2 text-sm font-medium text-gray-900s dark:text-white"
                                        for="user_avatar">Upload
                                        Image</label>
                                    <input
                                        class=":border-gray-600 :bg-gray-700 :text-gray-400 :placeholder-gray-400 block mb-5 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900s dark:text-white focus:outline-none"
                                        aria-describedby="user_avatar_help" id="image" type="file"
                                        name="image" />
                                </div>

                                <div class="flex justify-end m-2 p-2">
                                    <button type="submit"
                                        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add</button>
                                </div>

                            </div>
            </form>

        </div>
</x-admin-layout>
