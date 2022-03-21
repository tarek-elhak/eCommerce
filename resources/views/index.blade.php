<x-layout title="eCommerce">
    <header>
        <nav
            class="w-full h-16 text-slate-800 flex items-center justify-between
            border-b-2 border-indigo-50"
        >
            <div class="w-28 h-40  bg-logo bg-contain bg-no-repeat bg-center">
            </div>
            <ul class="mr-6 flex items-center gap-x-6">
                <li><a href="#" class="px-6 py-2 rounded-l bg-indigo-50 uppercase">login</a></li>
                <li><a href="#" class="px-6 py-2 border border-indigo-50 rounded-l hover:bg-indigo-50 uppercase">signup</a></li>
            </ul>
        </nav>
    </header>
    <main class="mt-10 text-slate-800">
        <section class="grid grid-cols-12">
            <aside class="col-span-2 border-r-2 border-indigo-50 mr-4">
                <h3 class="mt-4 pl-2">Filter By Category</h3>
                <div class="m-2 pl-6">
                    <form method="GET">
                        @foreach($categories as $category)
                            <p>
                                <input id="{{$category->category_name}}"
                                       type="checkbox" name="category[]" value="{{$category->category_name}}"
                                       @if(request("category"))
                                            {{in_array($category->category_name,request("category"),true) ? "checked" : ""}}
                                       @endif
                                />
                                <label for="{{$category->category_name}}" class="text-sm">{{$category->category_name}}</label>
                            </p>
                        @endforeach
                        <button class="w-full mr-2 bg-indigo-50 px-4 py-1 text-sm uppercase hover:bg-indigo-200">Filter</button>
                    </form>
                </div>
            </aside>
            <section class="col-span-10 grid grid-cols-12 gap-4">
                @foreach($items as $item)
                    <div class="col-span-3 flex flex-col border border-indigo-50 relative shadow-md shadow-indigo-50 rounded-md mr-2">
                        <div class="item__image w-32 h-40 self-center mt-20 m-4"
                             style="background: url('storage/{{$item->image}}') no-repeat; background-size: contain"
                        >
                            <span class="absolute bg-indigo-200 top-4 left-0 p-2 rounded-r-lg drop-shadow-xl shadow-indigo-50">
                                {{$item->price}} {{$item->currency}}
                            </span>
                        </div>
                        <h3 class="m-4"><a class="block hover:text-indigo-600" href="/category/{{$item->category->category_name}}/item/{{$item->name}}">{{$item->name}}</a></h3>
                        <div class="flex mt-auto m-4 items-center justify-between">
                            <span class="bg-amber-200 p-2">{{$item->number_of_available_pieces}} Available</span>
                            <span class="p-2 text-sm">{{$item->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </main>
</x-layout>
