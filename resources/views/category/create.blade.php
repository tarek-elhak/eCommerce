<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <form method="post" action="/admin/category/store"
                      class="flex flex-col w-2/4  bg-white p-6 drop-shadow-xl rounded-lg justify-center"
                      autocomplete="off">
                    @csrf
                    <header class="mx-auto">
                        <h3 class="font-semibold text-lg">Add New Category</h3>
                    </header>
                    <hr class="mb-8"/>
                    <div class="mb-6">
                        <input class="border focus:border-indigo-900 outline-0 w-full p-2 rounded"
                               type="text"
                               name="category_name"
                               id="category_name"
                               placeholder="Category Name" />
                        @error("category_name")
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
    </x-dashboard-grid>
</x-layout>
