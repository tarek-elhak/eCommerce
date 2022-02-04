<aside class="col-span-2 bg-indigo-900 min-h-screen">
    <section class="mt-2 mb-6">
        <a href="/admin/dashboard"
           class="block text-white font-semibold text-lg pl-4 hover:border-l-4 hover:border-indigo-50">
            <i class="fa fa-home"></i>
            Home
        </a>
    </section>
    <section class="border-b-px mb-6">
        <div x-data="{show : false}">
            <div @click="show= !show">
                <button class="w-full
                            text-white font-semibold font-lg
                            hover:text-indigo-900 hover:bg-indigo-50
                            p-4 transition"

                >
                    <i class="fa fa-plus"></i>
                    Members
                </button>
            </div>
            <ul x-show="show" x-transition class="space-y-4" style="display: none">
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
    </section>
</aside>
