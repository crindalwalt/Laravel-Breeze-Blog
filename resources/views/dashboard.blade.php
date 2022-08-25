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
                        <div class="text-6xl m-3">4</div>
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
                          <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                            <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Mark
                            </td>
                          
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                             <button class="btn bg-red-500 px-6 py-2 rounded-sm text-white m-1">Delete</button>
                             <button class="btn bg-blue-500 px-6 py-2 rounded-sm text-white m-1">Update</button>
                            </td>
                          </tr class="bg-white border-b">

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           </x-container>
        </div>
    </div>
</x-app-layout>
