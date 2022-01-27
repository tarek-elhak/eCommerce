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
                    <li class="font-semibold p-2 bg-indigo-50 text-indigo-900">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/members" class="ml-4 ">Manage Members</a>
                    </li>
                    <li class="text-white font-semibold px-2">
                        <i class="fa fa-user-plus"></i>
                        <a href="/admin/members/create" class="ml-4">Add new Member</a>
                    </li>
                    <li class="text-white font-semibold px-2">
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
        <!-- This example requires Tailwind CSS v2.0+ -->
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
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Full Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Registered Date
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Controls
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                1
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">tarek_abdelhak</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Tarek Abdelhak Mohamed</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="text-sm text-gray-900">tarek@google.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="text-sm text-gray-900">27 Jan 2021</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="bg-indigo-800 hover:bg-indigo-900 text-white px-4 py-1 font-semibold rounded">Edit</button>
                                    <button class="bg-red-400 hover:bg-red-500 text-white px-4 py-1 font-semibold rounded">Delete</button>
                                </td>
                            </tr>

                            <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>

