<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <div x-data="{show : false}" class="text-right mr-3 mt-2">
                <button @click= "show = !show" class="
                                inline-block bg-admin-avatar bg-cover bg-bottom
                                w-10 h-10 rounded-full hover:border-2 hover:border-indigo-200"
                >

                </button>
                <div x-show="show" class="relative" style="display: none">
                    <ul class="absolute right-5 top-2 bg-indigo-200 p-4 z-20 rounded-xl drop-shadow-2xl">
                        <li> <a href="/admin/logout">logout</a></li>
                    </ul>
                </div>
            </div>
            <section class="grid grid-cols-12 gap-4 m-10 bg-gray-50 border border-gray-200 rounded-lg p-4 drop-shadow-lg">
                <header class="col-span-12 border-b-2 pb-2 m-2 border-indigo-50 text-indigo-900 font-bold text-xl">
                    members statistics
                </header>

                <div class="col-span-3 bg-green-400 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-white text-lg font-semibold
                               border-b-2 border-green-200
                               uppercase m-2">
                        total members
                    </h3>
                    <span class="font-semibold text-5xl text-white
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        <a href="/admin/members">{{count($members)}}</a>
                    </span>
                </div>
                <div class="col-span-3 bg-red-400 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-white text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        pending members
                    </h3>
                    <span class="font-semibold text-5xl text-white
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        <a href="members?pending">{{count($members->where("is_registered",0))}}</a>
                    </span>
                </div>
                <div class="col-span-3 bg-cyan-800 rounded-lg drop-shadow-md">
                    <h3 class="text-center text-white text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        total items
                    </h3>
                    <span class="font-semibold text-5xl text-white
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        1200
                    </span>
                </div>
                <div class="col-span-3 bg-slate-400 rounded-lg drop-shadow-md">
                    <h3 class="text-center text-white text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        total comments
                    </h3>
                    <span class="font-semibold text-5xl text-white
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        3200
                    </span>
                </div>

            </section>
            <section class="grid grid-cols-12 gap-4 m-10 bg-gray-50 border border-gray-200 rounded-lg p-4 drop-shadow-lg">
                <header class="col-span-12 border-b-2 pb-2 m-2 border-indigo-50 text-indigo-900 font-bold text-xl">
                    latest news
                </header>

                <div class="col-span-6 bg-gray-100 rounded-lg drop-shadow-md">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        <i class="fa fa-users"></i>
                        latest registered users
                    </h3>
                        <ul class="m-4 text-indigo-900 space-y-2">
                            @foreach($members->sortByDesc('registered_date')->take(5) as $member)
                                <div x-data="{show:false}" class="odd:bg-white even:bg-slate-100 rounded-lg font-bold cursor-pointer p-2
                                            transition ease-in-out delay-100 hover:bg-slate-500 hover:text-white hover:scale-105 hover:-translate-y-1 duration-300">
                                    <li @click ="show = !show" class="flex justify-between items-center">
                                        {{$member->username}}
                                        <i class="fa fa-plus-circle"></i>
                                    </li>
                                    <div x-show="show" class="mt-2 flex justify-center items-center" style="display: none">
                                        <button class="
                                                    text-white
                                                    text-xs
                                                    mr-1
                                                    bg-indigo-800
                                                    hover:bg-indigo-900
                                                    font-semibold rounded"
                                        >
                                                <a  class="inline-block px-1 py-1" href="/admin/members/edit/{{$member->username}}">
                                                    <i class="fa fa-user-edit"></i>
                                                    Edit
                                                </a>
                                        </button>
                                        <form
                                            x-data="{
                                                        confirmationMessage: 'are you sure you want to delete ' ,
                                                        username: '{{$member->username}}'
                                                    }"
                                            x-ref="form"
                                            method="post"
                                            class="mr-1 bg-red-400 text-white text-xs hover:bg-red-500
                                                      font-semibold rounded
                                                      px-1 py-1"
                                            action="/admin/members/destroy/{{$member->username}}">
                                            @csrf
                                            <button
                                                {{-- TODO : Cutomized Confimation Popup window --}}
                                                @click.prevent="if(confirm(confirmationMessage+username)) $refs.form.submit()"
                                                type="submit"
                                            >
                                                <i class="fa fa-trash-alt"></i>
                                                Delete
                                            </button>
                                        </form>
                                        @unless ($member->is_registered)
                                            <form class="inline-block bg-green-500 text-white text-xs hover:bg-green-600 rounded font-semibold mr-2 px-1 py-1"
                                                  action="/admin/members/activate/{{$member->username}}"
                                                  method="post">
                                                @csrf
                                                <button type="submit">
                                                    <i class="fa fa-check-square"></i>
                                                    Activate
                                                </button>
                                            </form>
                                        @endunless
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                </div>
                <div class="col-span-6 bg-gray-100 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        <i class="fa fa-tags"></i>
                        latest added items
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        test
                    </span>
                </div>
            </section>
        </section>
    </x-dashboard-grid>
</x-layout>
