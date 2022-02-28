<aside class="col-span-2 bg-indigo-900 min-h-screen">
    <section class="mt-2 mb-6">
        <a href="/admin/dashboard"
           class="block text-white font-semibold text-md pl-4 hover:border-l-4 hover:border-indigo-50">
            <i class="fa fa-home"></i>
            Home
        </a>
    </section>
    <section class="border-b-px mb-6">
        <div x-data="{show : false}">
            <div>
                <button @click="show = !show"
                        class="w-full text-left text-white font-semibold text-md pl-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center">
                    <div>
                        <i class="fa fa-users"></i>
                        Members
                    </div>
                    <i class="pr-4 fa fa-plus"></i>
                </button>
                <ul x-show="show"
                    class="space-y-4" style="display: none">
                    <li class="font-semibold p-2 {{request()->routeIs('manage members') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/members" class="ml-4 ">Manage Members</a>
                    </li>
                    <li class="font-semibold p-2 {{request()->routeIs('create member') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-user-plus"></i>
                        <a href="/admin/members/create" class="ml-4">Add new Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="border-b-px mb-6">
        <div x-data="{show : false}">
            <div>
                <button @click="show = !show"
                        class="w-full text-left text-white font-semibold text-md pl-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center">
                    <div>
                        <i class="fa fa-tags"></i>
                        Categories
                    </div>
                    <i class="pr-4 fa fa-plus"></i>
                </button>
                <ul x-show="show"
                    class="space-y-4" style="display: none">
                    <li class="font-semibold p-2 {{request()->routeIs('manage members') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/categories" class="ml-4 ">Manage Categories</a>
                    </li>
                    <li class="font-semibold p-2 {{request()->routeIs('create category') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-tag"></i>
                        <a href="/admin/categories/create" class="ml-4">Add new category</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="border-b-px mb-6">
        <div x-data="{show : false}">
            <div>
                <button @click="show = !show"
                        class="w-full text-left text-white font-semibold text-md pl-4 hover:border-l-4 hover:border-indigo-50 flex justify-between items-center">
                    <div>
                        <i class="fa fa-tags"></i>
                        Items
                    </div>
                    <i class="pr-4 fa fa-plus"></i>
                </button>
                <ul x-show="show"
                    class="space-y-4" style="display: none">
                    <li class="font-semibold p-2 {{request()->routeIs('manage items') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/categories" class="ml-4 ">Manage Categories</a>
                    </li>
                    <li class="font-semibold p-2 {{request()->routeIs('add item') ? 'bg-indigo-50 text-indigo-900' : 'text-white'}}">
                        <i class="fa fa-tag"></i>
                        <a href="/admin/items/create" class="ml-4">Add New Item</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>
