<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="px-6 py-10  bg-white border-b border-gray-200">
        <h1 class="text-4xl">{{ $post->title }}</h1>
        <div class="flex mb-12">
            <a href="/category/{{ $post->category->slug}}" class="px-3 bg-gray-200">{{ $post->category->name }}</a>
            <p class="text-sm text-gray-300 ml-12"> {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <p class="my-2">{{ $post->excerpt }}</p>

        <div class="text-2xl">Description: </div>
        <div class="text-sm"><?= $post->description ?></div>
        <div class="mt-3">
            <a class="px-3 py-2 bg-green-200 rounded" href="/post/{{$post->slug}}" >Like Post</a>
        </div>
    </div>
</div>
