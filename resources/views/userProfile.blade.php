
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

                <h2 class="text-3xl">User Profile</h2>
               <x-blogpost.user-banner :user="$user"></x-blogpost.user-banner>




            <x-container>
                <h2 class="text-3xl">Posts by User</h2>
                <x-blogpost.all-posts :posts="$user->posts"></x-blogpost.all-posts>
            </x-container>
        </div>
    </div>
</x-app-layout>
