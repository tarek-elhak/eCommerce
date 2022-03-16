<aside class="col-span-2 bg-indigo-900 min-h-screen">
    <section class="mt-2 mb-16">
        <a href="/admin/dashboard"
           class="block text-white font-semibold text-md pl-4 hover:border-l-4 hover:border-indigo-50">
            <i class="fa fa-home"></i>
            Home
        </a>
    </section>
    <section class="border-b-px mb-10">
        <div x-data="{show : false}">
            <div>
                <button @click="show = !show"
                        class="w-full text-left text-white font-semibold text-md pl-4 pr-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center"
                        id="members__btn"
                >

                    <i class="fa fa-users"></i>
                    Members
                    <i id="members__icon" class="fa fa-plus"></i>
                </button>
                <ul id="members" x-show="show"
                    x-transition.duration.500ms
                    class="ml-8 mr-2  mt-2 space-y-4 bg-indigo-50 text-sm text-indigo-500 rounded-xl" style="display: none">
                    <li class="font-semibold p-2 flex justify-center {{request()->routeIs('manage members') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                        <a href="/admin/members" class="m-2 hover:text-indigo-900">
                            <i class="fa fa-tasks"></i>
                            Manage Members
                        </a>
                    </li>
                    <li class="font-semibold p-2 flex justify-center {{request()->routeIs('create member') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                        <a href="/admin/members/create" class="m-2 hover:text-indigo-900">
                            <i class="fa fa-user-plus"></i>
                            Add new Member
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="border-b-px mb-10">
        <div x-data="{show : false}">
            <div>
                <button @click="show = !show"
                        class="w-full text-left text-white font-semibold text-md pl-4 pr-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center"
                        id="categories__btn"
                >
                    <i class="fa fa-tags"></i>
                    Categories
                    <i id="categories__icon" class="fa fa-plus"></i>
                </button>
                <ul x-show="show"
                    id="categories"
                    x-transition.duration.500ms
                    class="ml-8 mr-2  mt-2 space-y-4 bg-indigo-50 text-sm text-indigo-500 rounded-xl" style="display: none">
                    <li class="font-semibold p-2 flex justify-center {{request()->routeIs('manage members') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                        <a href="/admin/categories" class="m-2 hover:text-indigo-900">
                            <i id= "categories__icon" class="fa fa-tasks"></i>
                            Manage Categories
                        </a>
                    </li>
                    <li class="font-semibold p-2 flex justify-center {{request()->routeIs('create category') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                        <a href="/admin/categories/create" class="m-2 hover:text-indigo-900">
                            <i class="fa fa-tag"></i>
                            Add new category
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="border-b-px mb-10">
        <div x-data="{show : false}">

            <button @click="show = !show"
                    id="items__btn"
                    class="w-full text-left text-white font-semibold text-md pl-4 pr-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center">
                <i class="fa fa-shopping-cart"></i>
                Items
                <i id="items__icon" class="fa fa-plus"></i>
            </button>

            <ul x-show="show"
                id="items"
                x-transition.duration.500ms
                class="space-y-4 ml-8 mr-2 mt-2 space-y-4 bg-indigo-50 text-sm text-indigo-500 rounded-xl" style="display: none">
                <li class="font-semibold p-2 flex  justify-center {{request()->routeIs('manage items') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                    <a href="/admin/items" class="m-2 hover:text-indigo-900">
                        <i class="fa fa-tasks"></i>
                        Manage Items
                    </a>
                </li>
                <li class="font-semibold p-2 flex justify-center {{request()->routeIs('add item') ? 'bg-indigo-50 text-indigo-900' : ''}}">
                    <a href="/admin/items/create" class="m-2 hover:text-indigo-900">
                        <i class="fa fa-tag"></i>
                        Add New Item
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="border-b-px mb-10">
        <div x-data="{show : false}">
            <button @click="show = !show"
                    id="comments__btn"
                    class="w-full text-left text-white font-semibold text-md pl-4 pr-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center">
                <i  class="fa fa-comments"></i>
                Comments
                <i id="comments__icon" class="fa fa-plus"></i>
            </button>
            <ul x-show="show"
                id="comments"
                x-transition.duration.500ms
                class="ml-8 mr-2  mt-2 space-y-4 bg-indigo-50 text-sm text-indigo-500 rounded-xl" style="display: none">
                <li class="font-semibold p-2 flex justify-center {{request()->routeIs('manage comments') ? 'bg-white text-indigo-900' : ''}}">
                    <a href="/admin/comments" class="m-2 hover:text-indigo-900">
                        <i class="fa fa-tasks"></i>
                        Manage Comments
                    </a>
                </li>
            </ul>

        </div>
    </section>
</aside>
