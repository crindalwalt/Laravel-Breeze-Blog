<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Browse all of our Posts') }}
        </h2>
    </x-slot>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>


                    {{-- Components for all posts --}}
                    <x-blogpost.single-post :post="$post"></x-blogpost.single-post>
                </div>

            </div>
            <div class="py-6  2xl:px-0 2xl:container 2xl:mx-auto flex justify-center items-center">

                <div class="flex flex-col justify-start items-start w-full space-y-8">
                    <div class="flex justify-start items-start">
                        <p
                            class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-white ">
                            Comments</p>
                    </div>
                   <x-blogpost.post-comment :comment="$post->comment"></x-blogpost.post-comment>
                   
                </div>
            </div>
                <style>
                    .carousel-cell {
                        width: 150px;
                        height: 150px;

                        margin-right: 24px;
                        counter-increment: carousel-cell;
                    }

                    .carousel-cell:before {
                        display: block;
                        width: 20%;
                    }

                    .flickity-slider {
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        left: -260px !important;
                    }

                    .flickity-button {
                        position: absolute !important;
                        inset: 0 !important;
                        top: 50% !important;
                        left: 80% !important;
                        background: white;
                        border: 0px;
                        color: #27272a;
                    }

                    .flickity-prev-next-button:hover {
                        background-color: #27272a;
                        color: white;
                    }

                    .flickity-prev-next-button.previous {
                        visibility: hidden;
                    }

                    .flickity-prev-next-button.next {
                        margin-left: 50px;
                        width: 48px;
                        height: 48px;
                        visibility: hidden;
                    }

                    .flickity-enabled.is-draggable .flickity-viewport {
                        cursor: none;
                        cursor: default;
                    }

                    .flickity-prev-next-button .flickity-button-icon {
                        margin-left: 2px;
                        margin-top: 2px;
                        width: 24px;
                        height: 24px;
                    }
                </style>
                <script>
                    let menu = document.getElementById("menu");
                    let closeIcon = document.getElementById("closeIcon");
                    let openIcon = document.getElementById("openIcon");
                    const showMenu = (flag) => {
                        if (flag) {
                            menu.classList.toggle("hidden");
                            closeIcon.classList.toggle("hidden");
                            openIcon.classList.toggle("hidden");
                        }
                    };

                    let menu2 = document.getElementById("menu2");
                    let closeIcon2 = document.getElementById("closeIcon2");
                    let openIcon2 = document.getElementById("openIcon2");
                    const showMenu2 = (flag) => {
                        if (flag) {
                            menu2.classList.toggle("hidden");
                            closeIcon2.classList.toggle("hidden");
                            openIcon2.classList.toggle("hidden");
                        }
                    };
                </script>
            <div id="comment">
                <!-- comment form -->
                <div class="flex items-center justify-center shadow-lg mt-12  mb-4 max-w-lg">
                    <form action="/comment/{{ $post->id }}" class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <textarea
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                    name="body" placeholder='Type Your Comment' required></textarea>
                            </div>
                            <div class="w-full md:w-full flex items-start md:w-full px-3">
                                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-xs md:text-sm pt-px">Say something Nice <small class="text-red-500">only</small></p>
                                </div>
                                <div class="-mr-1">
                                    <input type='submit'
                                        class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-red-500 hover:text-gray-300"
                                        value='Post Comment'>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
