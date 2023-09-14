<x-app-layout>

    <x-slot name="header">
        <h2
            class="flex items-center justify-center font-semibold text-2xl text-gray-800 dark:text-white  leading-tight mb-5">
            {{ __('FarmSmart Forum') }}
        </h2>
    </x-slot>

    <h2 class="flex items-center justify-center font-semibold text-xl text-gray-800 dark:text-white  leading-tight">
        Post Your Farmig Related Stuff In Our Community Forum
    </h2>


    <div
        class="w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto my-5 p-2">

        <form action="{{ route('forum.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-6">
                <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic </label>
                <input placeholder="your topic" id="topic" type="text" name="topic" :value="old('topic')"
                    required autofocus autocomplete="topic"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content
                </label>
                <textarea placeholder="your content" id="content" type="text" name="content" :value="old('content')" required
                    autofocus autocomplete="content"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-3"
                    cols="30" rows="10"></textarea>

            </div>

            <div class="mb-6">
                <label class=" mb-2 block text-sm font-medium text-white" for="user_avatar">Upload
                    Photo</label>
                <input
                    class=":border-gray-600 :bg-gray-700 :text-gray-400 :placeholder-gray-400 block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
                    aria-describedby="user_avatar_help" id="image" type="file" name="image" />
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post</button>
        </form>
    </div>




    <div>

        <div class="">
            @foreach ($forumPosts as $forum)
                <div
                    class="w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto my-5 p-4">
                    <img src="{{ Storage::url($forum->image) }}" alt="Image" class="rounded-t-lg sw-full">
                    {{-- <a href="#">
                    <img class="rounded-t-lg sw-full" src="{{ asset($forum->image) }}" alt="" />
                </a> --}}
                    <div class="py-4">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $forum->topic }}
                        </h5>
                        <div class="text-gray-700 dark:text-white mb-3">
                            <label for="name">{{ $forum->user_name }}</label>
                        </div>
                        <div class="mb-5 bg-gray-50 dark:bg-gray-700 rounded-lg px-2">
                            <p class="mb-3 font-normal text-gray-700 dark:text-white">{{ $forum->content }}</p>
                        </div>
                    </div>

                    <div class="bg-gray-100 dark:bg-gray-900 p-2 rounded-lg ">

                        <h6 class="font-semibold text-gray-700 dark:text-white mb-3">Comments</h6>
                        <div class="mb-4">
                            @foreach ($forum->comments as $comment)
                                <div class="text-gray-700 dark:text-white">
                                    - {{ $comment->content }}
                                </div>
                            @endforeach
                        </div>


                        <form action="{{ route('comment.store', ['post_id' => $forum->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <textarea placeholder="leave a comment" id="commentcontent" type="text" name="commentcontent"
                                :value="old('commentcontent')" required autofocus autocomplete="commentcontent"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-3"
                                cols="30" rows="1"></textarea>
                            <button type="submit"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post
                                Comment
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
        </div>
        @endforeach
    </div>


    {{-- <div>
            <form action="" method="post">
                @csrf
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-xl mt-3">
                    Comments</label>
                <label for="comment" id="comment" class="mb-5 block text-sm  text-gray-900 dark:text-white">
                    Comments</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-4"
                    placeholder="Leave a comment...">
                    </textarea>

                <button type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg></button>


            </form>
        </div> --}}


    </div>
    </div>




</x-app-layout>
