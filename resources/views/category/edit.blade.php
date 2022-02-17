<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-dashboard-form action="/admin/categories/update/{{$category->category_name}}" method="post" header="Edit {{$category->category_name}} Category">
                    <x-dashboard-form-input type="text" name="category_name" placeholder="Category Name" value="{{$category->category_name}}"/>
                    <x-dashboard-form-submit-input name="Update"/>
                </x-dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
