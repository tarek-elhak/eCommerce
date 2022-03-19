<x-layout title="Manage Categories">
    @if(session("successMessage"))
        <x-success-flash :message="session('successMessage')"></x-success-flash>
    @elseif(session("dangerMessage"))
        <x-danger-flash :message="session('dangerMessage')"></x-danger-flash>
    @endif
    <x-dashboard-grid>
        <section class="col-span-10">
            <div class="flex flex-col p-10">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            #ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Visibility
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ads
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Comments
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Creation Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Last Update Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Controls
                                        </th>
                                    </tr>
                                </thead>
                                @if (count($categories) != 0)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$category->id}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$category->category_name}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div>
                                                    @if($category->visible)
                                                        <span class="text-sm text-white bg-green-400 font-bold px-4 py-1 rounded-lg">on</span>
                                                    @else
                                                        <span class="text-sm text-white bg-rose-600 font-bold px-4 py-1 rounded-lg">off</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div>
                                                    @if($category->ads_allowed)
                                                        <span class="text-sm text-white bg-green-400 font-bold px-4 py-1 rounded-lg">on</span>
                                                    @else
                                                        <span class="text-sm text-white bg-rose-600 font-bold px-4 py-1 rounded-lg">off</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div>
                                                    @if($category->comments_allowed)
                                                        <span class="text-sm text-white bg-green-400 font-bold px-4 py-1 rounded-lg">on</span>
                                                    @else
                                                        <span class="text-sm text-white bg-rose-600 font-bold px-4 py-1 rounded-lg">off</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$category->created_at->diffForHumans()}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <div class="text-sm text-gray-900">{{$category->updated_at->diffForHumans()}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button class="
                                                                text-white
                                                                bg-indigo-800
                                                                hover:bg-indigo-900
                                                                font-semibold rounded"
                                                >
                                                    <i class="fa fa-user-edit ml-2"></i>
                                                    <a  class="inline-block px-4 py-1" href="/admin/categories/edit/{{$category->category_name}}"> Edit </a>
                                                </button>
                                                <form
                                                    x-data="{
                                                        confirmationMessage: 'are you sure you want to delete ' ,
                                                        category_name: '{{$category->category_name}}'
                                                        }"
                                                    x-ref="form"
                                                    method="post"
                                                    class="inline-block"
                                                    action="/admin/categories/destroy/{{$category->category_name}}">
                                                    @csrf
                                                    <button
                                                        {{-- TODO : Cutomized Confimation Popup window --}}
                                                        @click.prevent="if(confirm(confirmationMessage+category_name)) $refs.form.submit()"
                                                        type="submit"
                                                        class="bg-red-400 text-white
                                                              hover:bg-red-500
                                                              font-semibold rounded
                                                              px-4 py-1"
                                                    >
                                                        <i class="fa fa-trash-alt text-white mr-2"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @else
                                    <div class="flex justify-center p-6">
                                        <h3 class="text-indigo-900 font-bold text-lg">there are no such Categories to be shown</h3>
                                    </div>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-dashboard-grid>
</x-layout>
