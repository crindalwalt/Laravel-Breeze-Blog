<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="px-6 py-10  bg-white border-b border-gray-200">
        <h1 class="text-4xl">{{ $post->title }}</h1>
        <div class="flex mb-12">
            <div class="flex justify-center items-center   text-gray-500 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <a href="/user/{{ $post->user->id }}" class="ml-1 mr-3 ">
                    {{$post->user->name}} </a>
            </div>

            <a href="/category/{{ $post->category->slug}}" class="px-3 bg-gray-200">{{ $post->category->name }}</a>
            <p class="text-sm text-gray-300 ml-12"> {{ $post->created_at->diffForHumans() }}</p>
        </div>
        <p class="my-2">{{ $post->excerpt }}</p>

        <div class="text-2xl">Description: </div>
        <div class="text-sm"><?= $post->description ?></div>
       <div class="flex">
        <div class="mt-3 mr-6" >
            <a class="px-3 py-2 bg-green-200 rounded" href="/post/{{$post->slug}}" >Like Post</a>
        </div> 
        <div class="mt-3  mr-6">
            <a class="px-3 py-2 bg-red-200 rounded" href="#comment" >Add Comment</a>
        </div>
       </div>
    </div>
</div>
