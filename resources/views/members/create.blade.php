<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <title>Add New Member</title>
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
                    <li class="text-white font-semibold px-2">
                        <i class="fa fa-tasks"></i>
                        <a href="/admin/members" class="ml-4 ">Manage Members</a>
                    </li>
                    <li class="font-semibold p-2 bg-indigo-50 text-indigo-900">
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
        <main class="flex justify-center items-center mt-20">
            <form method="post" action="/admin/members/store"
                  class="flex flex-col w-2/4  bg-white p-6 drop-shadow-xl rounded-lg justify-center"
                  autocomplete="off">
                @csrf
                <header class="mx-auto">
                    <h3 class="font-semibold text-lg">Add New Member</h3>
                </header>
                <hr class="mb-8"/>
                <div class="mb-6">
                    <input class=" border focus:border-indigo-900 outline-0 w-full p-2 rounded"
                           type="text"
                           name="username"
                           id="username"
                           placeholder="Your User Name" />
                    @error("username")
                    <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <input class=" border focus:border-indigo-900 outline-0 w-full p-2 rounded"
                           type="text"
                           name="full_name"
                           id="full_name"
                           placeholder="Your Full Name" />
                    @error("full_name")
                    <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <input class=" border focus:border-indigo-900 outline-0 w-full p-2 rounded"
                           type="text"
                           name="email"
                           id="email"
                           placeholder="Your Email" />
                    @error("email")
                    <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <div class="w-full flex relative items-center">
                        <input class="outline-0 p-2 border focus:border-indigo-900 flex-1 rounded" type="password" name="password" id="password" placeholder="password" />
                        <i class="fa fa-eye absolute right-2 cursor-pointer"></i>
                    </div>
                    @error("password")
                    <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                    @enderror
                </div>
                <div class="text-center mb-6">
                    <button type="submit" class="px-8 py-2 bg-indigo-800 hover:bg-indigo-900 text-white rounded font-semibold">Add</button>
                </div>
                <div class="text-center">
                    @if(session()->has("message"))
                        <p class="text-red-500 text-xs font-semibold">{{session()->get("message")}}</p>
                    @endif
                </div>
            </form>
        </main>
    </section>
</main>
</body>
</html>
