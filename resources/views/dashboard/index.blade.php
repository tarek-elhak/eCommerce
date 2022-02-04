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
                        100
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

                <div class="col-span-6 bg-gray-100 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        <i class="fa fa-users"></i>
                        latest registered users
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        test
                    </span>
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
