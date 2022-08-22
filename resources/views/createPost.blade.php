<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Posts that inspire others') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-container>
              <form action="/add" method="POST">
                @csrf
                <x-label for="title">Title</x-label>
                <x-input id="title" class="p-2 border w-3/4" name="title"/>
                <select name="category" id="category" class="rounded-sm">Select Category
                    <option value="1" selected>Politics </option>
                    <option value="2">Sports</option>
                    <option value="3">Advanture</option>
                </select>
                <div class="my-4">
                    <x-label for="excerpt">Excerpt</x-label>
                    <x-input id="excerpt" class="p-2 border w-full" name="excerpt"/>
                </div>
                <x-label for="posteditor" class="mt-4 mb-2 text-2xl">Write Your Post Here</x-label>
                <textarea name="posteditor" id="posteditor" class="w-full"></textarea>


                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button class="btn px-12 py-3 bg-green-300 my-3 text-gray-500 rounded-sm" type="submit">Create post </button>
              </form>
            </x-container>
        </div>
    </div>
</x-app-layout>

<script>
    ClassicEditor
        .create( document.querySelector( '#posteditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
