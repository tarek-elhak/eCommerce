<aside class="col-span-2 h-screen bg-indigo-900">
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
                <li class="text-white font-semibold px-2">
                    <i class="fa fa-tasks"></i>
                    <a href="/admin/members" class="ml-4 ">Manage Members</a>
                </li>
                <li class="text-white font-semibold px-2">
                    <i class="fa fa-user-plus"></i>
                    <a href="/admin/members/create" class="ml-4">Add new Member</a>
                </li>
                <li class="font-semibold p-2 bg-indigo-50 text-indigo-900">
                    <i class="fa fa-user-edit"></i>
                    <a href="/admin/members/edit" class="ml-4">
                        Edit Member
                    </a>
                </li>
            </ul>
        </div>
    </section>
</aside>
