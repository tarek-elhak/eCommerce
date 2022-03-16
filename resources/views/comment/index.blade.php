<x-layout>
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
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">
                                        body
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        item name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        member username
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        added date
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Controls
                                    </th>
                                </tr>
                                </thead>
                                @if (count($comments) != 0)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$comment->id}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap ">
                                                <div class="text-sm text-gray-900">{{$comment->body}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <div class="text-sm text-gray-900">{{$comment->item->name}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$comment->member->username}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <div class="text-sm text-gray-900">{{$comment->created_at->diffForHumans()}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button class="
                                                                        text-white
                                                                        bg-indigo-800
                                                                        hover:bg-indigo-900
                                                                        font-semibold rounded"
                                                >
                                                    <i class="fa fa-user-edit ml-2"></i>
                                                    <a  class="inline-block px-4 py-1" href="/admin/comments/edit/{{$comment->id}}"> Edit </a>
                                                </button>
                                                <form
                                                    x-data="{
                                                        confirmationMessage: 'are you sure you want to delete ' ,
                                                        comment: '{{$comment->body}}'
                                                        }"
                                                    x-ref="form"
                                                    method="post"
                                                    class="inline-block"
                                                    action="/admin/comments/destroy/{{$comment->id}}">
                                                    @csrf
                                                    <button
                                                        {{-- TODO : Cutomized Confimation Popup window --}}
                                                        @click.prevent="if(confirm(confirmationMessage+comment)) $refs.form.submit()"
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
                                                @unless ($comment->is_approved)
                                                    <form class="inline-block bg-green-500 text-white hover:bg-green-600 rounded font-semibold"
                                                          action="/admin/comments/approve/{{$comment->id}}"
                                                          method="post">
                                                        @csrf
                                                        <button type="submit" class="px-2 py-1">
                                                            <i class="fa fa-check-square mr-1"></i>
                                                            Approve
                                                        </button>
                                                    </form>
                                                @endunless
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
