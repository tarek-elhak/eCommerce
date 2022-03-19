<x-layout title="Manage Items">
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
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        image
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        currency
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        number of available pieces
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        category
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        member
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        country made
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        adding data
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        update_at
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        controls
                                    </th>
                                </thead>
                                @if (count($items) != 0)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($items as $item)
                                        <tr>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 flex-nowrap">
                                                        {{$item->id}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 w-32">
                                                    {{$item->name}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 w-96 overflow-x-auto">
                                                    {{$item->description}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 w-20 h-20 overflow-x-auto">
                                                    <img
                                                        class="block"
                                                        src="{{asset("storage/$item->image")}}"
                                                        alt="{{$item->name}}"
                                                    />
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 overflow-x-auto">
                                                    {{$item->price}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-start text-sm font-medium text-gray-900 overflow-x-auto">
                                                    {{$item->currency}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900 w-32">
                                                    {{$item->number_of_available_pieces}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->status}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->category->category_name}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->member->username}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->made_country}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->created_at}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$item->updated_at}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button class="
                                                                text-white
                                                                bg-indigo-800
                                                                hover:bg-indigo-900
                                                                font-semibold rounded"
                                                >

                                                    <a  class="inline-block px-4 py-1" href="/admin/items/edit/{{$item->name}}">
                                                        <i class="fa fa-user-edit mr-2"></i>
                                                        Edit
                                                    </a>
                                                </button>
                                                <form
                                                    x-data="{
                                                        confirmationMessage: 'are you sure you want to delete ' ,
                                                        itemName: '{{$item->name}}'
                                                        }"
                                                    x-ref="form"
                                                    method="post"
                                                    class="inline-block"
                                                    action="/admin/items/destroy/{{$item->name}}">
                                                    @csrf
                                                    <button
                                                        {{-- TODO : Cutomized Confimation Popup window --}}
                                                        @click.prevent="if(confirm(confirmationMessage+itemName)) $refs.form.submit()"
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
                                                @unless ($item->is_approved)
                                                    <form class="inline-block bg-green-500 text-white hover:bg-green-600 rounded font-semibold"
                                                          action="/admin/items/approve/{{$item->name}}"
                                                          method="post">
                                                        @csrf
                                                        <button type="submit" class="px-2 py-1">
                                                            <i class="fa fa-check-square mr-1"></i>
                                                            Approve
                                                        </button>
                                                    </form>
                                                @endunless
                                                <button class="
                                                                text-white
                                                                bg-slate-400
                                                                hover:bg-slate-600
                                                                font-semibold rounded"
                                                >

                                                    <a  class="inline-block px-4 py-1" href="/admin/comments/{{$item->name}}/show">
                                                        <i class="fa fa-comments mr-2"></i>
                                                        Show Comments
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @else
                                    <div class="flex justify-center p-6">
                                        <h3 class="text-indigo-900 font-bold text-lg">there are no such members to be shown</h3>
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
