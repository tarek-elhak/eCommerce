<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" />
    <script src="{{asset("js/app.js")}}" defer></script>
</head>
<body>
<main class="w-full grid grid-cols-12 gap-x-10 bg-indigo-50">
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
                    <li class="text-white font-semibold p-2">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/members" class="ml-4">Manage Members</a>
                    </li>
                    <li class="text-white font-semibold p-2">
                        <i class="fa fa-user-plus"></i>
                        <a href="/admin/members/create" class="ml-4">Add new Member</a>
                    </li>
                    <li class="text-white font-semibold p-2">
                        <i class="fa fa-user-edit"></i>
                        <a href="/admin/members/edit" class="ml-4">
                            Edit Member
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </aside>
    <section class="col-span-10">
        {{-- Dashboard Content --}}
    </section>
</main>
</body>
</html>

