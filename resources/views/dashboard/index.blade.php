<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <section class="grid grid-cols-12 gap-4 m-10 bg-gray-50 border border-gray-200 rounded-lg p-4 drop-shadow-lg">
                <header class="col-span-12 border-b-2 pb-2 m-2 border-indigo-50 text-indigo-900 font-bold text-xl">
                    members statistics
                </header>

                <div class="col-span-3 bg-gray-100 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        total members
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        {{count($members)}}
                    </span>
                </div>
                <div class="col-span-3 bg-gray-100 rounded-lg drop-shadow-md h-60 relative">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        pending members
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        100
                    </span>
                </div>
                <div class="col-span-3 bg-gray-100 rounded-lg drop-shadow-md">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        total items
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
                                absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2"
                    >
                        1200
                    </span>
                </div>
                <div class="col-span-3 bg-gray-100 rounded-lg drop-shadow-md">
                    <h3 class="text-center text-indigo-900 text-lg font-semibold
                               border-b-2 border-gray-200
                               uppercase m-2">
                        total comments
                    </h3>
                    <span class="font-semibold text-5xl text-indigo-800
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
