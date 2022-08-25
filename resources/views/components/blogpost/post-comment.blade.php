@props(['comment'])
{{-- @dd($comment) --}}
{{-- @dd($comment) --}}
<div>
    {{-- for looping comments --}}
    @foreach ($comment as $co)
        <div class="w-3/4 flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-3 my-4">

            {{-- ? user detail --}}
            <div id="menu" class="md:block">
                <div class="mt-3 flex justify-start items-center flex-row space-x-2.5">
                    <div>
                        <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                    </div>
                    <div class="flex flex-col justify-start items-start space-y-2">
                        <p class="text-base font-medium leading-none text-gray-800 dark:text-white">
                            {{ $co->user->name }}

                        </p>
                        <p class="text-sm leading-none text-gray-600 dark:text-white">
                            {{ $co->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- ? comment detail --}}
            <div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 md:px-8 py-6">

                <div id="menu2" class="hidden md:block">
                    <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">
                        {{ $co->comment }}
                    </p>


                </div>
            </div>

        </div>
       
    @endforeach
</div>
