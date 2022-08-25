<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
           <x-container>
            <h2 class="text-2xl">Your Highlights</h2>
            <div class="quick_peek my-12 py-4 flex justify-evenly">
                <div class="box rounded-lg bg-blue-300  flex items-center  justify-center w-40 h-40">
                    <div class="flex items-center  justify-center flex-col">
                        <div class="text-6xl m-3">{{ $posts->count() }}</div>
                        <div class="text-sm">Post written</div>
                    </div>
                </div>
                <div class="box rounded-lg bg-green-300  flex items-center  justify-center w-40 h-40">
                    <div class="flex items-center  justify-center flex-col">
                        <div class="text-6xl m-3">15K</div>
                        <div class="text-sm">Likes recieved</div>
                    </div>
                </div>
                <div class="box rounded-lg bg-red-300  flex items-center  justify-center w-40 h-40">
                    <div class="flex items-center  justify-center flex-col">
                        <div class="text-6xl m-3">17</div>
                        <div class="text-sm">Comment recieved</div>
                    </div>
                </div>
            </div>

            <h2 class="text-2xl">Your Posts</h2>
          <x-tabular-post :posts="$posts"></x-tabular-post>
            </x-container>
        </div>
    </div>
</x-app-layout>
