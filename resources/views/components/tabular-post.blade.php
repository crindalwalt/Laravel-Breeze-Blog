@props(['posts'])



<div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-200">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                      #
                    </th>
                    <th colspan="2" scope="col"  class="text-sm font-medium text-gray-900 px-6 py-4">
                     Post Title
                    </th>
                    
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                      Actions
                    </th>
                  </tr>
                </thead class="border-b">
                <tbody>
                    @foreach ($posts as $post)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                        <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{ $post->title }}
                        </td>
                      
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                         <a href="/deletePost/{{ $post->id }}" class="btn bg-red-500 px-6 py-2 rounded-sm text-white m-1">Delete</a>
                         <a class="btn bg-blue-500 px-6 py-2 rounded-sm text-white m-1">Update</a>
                        </td>
                      </tr class="bg-white border-b">
                    @endforeach
                  

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   
</div>