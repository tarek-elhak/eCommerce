<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" />
    <script src="{{asset("js/app.js")}}" defer></script>
</head>
<body>
    <main class="flex bg-indigo-50 justify-center items-center min-h-screen">
        <form method="post" action="/admin/login"
              class="flex flex-col w-96 bg-white p-6 drop-shadow-xl rounded-lg justify-center"
              autocomplete="off">
            @csrf
            <header class="mx-auto">
                <h3 class="font-semibold text-lg">Login to the Admin panel</h3>
            </header>
            <hr class="mb-8"/>
            <div class="mb-6">
                <input class=" border focus:border-indigo-900 outline-0 w-full p-2 rounded"
                       type="text"
                       name="username"
                       id="username"
                       placeholder="username" />
                    @error("username")
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
                <button type="submit" class="px-8 py-2 bg-indigo-800 hover:bg-indigo-900 text-white rounded font-semibold">Login</button>
            </div>
            <div class="text-center">
                @if(session()->has("message"))
                    <p class="text-red-500 text-xs font-semibold">{{session()->get("message")}}</p>
                @endif
            </div>
        </form>
    </main>
</body>
</html>
