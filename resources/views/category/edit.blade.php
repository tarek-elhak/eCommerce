<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-form.dashboard-form action="/admin/categories/update/{{$category->category_name}}" method="post" header="Edit {{$category->category_name}} Category">
                    <x-form.input type="text" name="category_name" placeholder="Category Name" value="{{$category->category_name}}"/>
                    <x-form.checkbox-input name="visible"
                                                     content="Visible"
                                                     :check="$category->visible" />
                    <x-form.checkbox-input name="ads"
                                                     content="Allow Ads"
                                                     :check="$category->ads_allowed" />
                    <x-form.checkbox-input name="comments"
                                                     content="Allow Comments"
                                                     :check="$category->comments_allowed"/>
                    <x-form.submit name="Update"/>
                </x-form.dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
