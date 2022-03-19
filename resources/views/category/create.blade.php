<x-layout title="Create New Category">
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-form.dashboard-form action="/admin/categories/store" method="post" header="Add New Category">
                    <x-form.input type="text" name="category_name" placeholder="Category Name"/>
                    <x-form.checkbox-input name="visible"  content="Visible"  :check=true />
                    <x-form.checkbox-input name="ads"  content="Allow Ads" :check=false />
                    <x-form.checkbox-input name="comments"  content="Allow Comments" :check=false />
                    <x-form.submit name="Add"/>
                </x-form.dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
