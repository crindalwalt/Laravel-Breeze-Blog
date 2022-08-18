
@foreach($posts as $post)

    <div class="px-6 py-10  bg-white border-b border-gray-200 ">
        {{--    Components for all post    --}}
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p class="my-2">{{ $post->excerpt }}</p>
        <div class="flex">
            <a href="/category/{{ $post->category->slug }}" class="px-3  bg-gray-200">{{ $post->category->name }}</a>
            <p class="text-sm text-gray-300 ml-12"> {{ $post->created_at->diffForHumans() }}</p>

        </div>
        <div class="mt-4">
            <a class="px-3 py-2 bg-green-300 rounded" href="/post/{{$post->slug}}" >View Post &rightarrow;</a>
        </div>
    </div>
@endforeach
