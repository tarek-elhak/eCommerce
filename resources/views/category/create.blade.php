<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-dashboard-form action="/admin/categories/store" method="post" header="Add New Category">
                    <x-dashboard-form-input type="text" name="category_name" placeholder="Category Name"/>
                    <x-dashboard-form-checkbox-input name="visible"  content="Visible"  :check=true />
                    <x-dashboard-form-checkbox-input name="ads"  content="Allow Ads" :check=false />
                    <x-dashboard-form-checkbox-input name="comments"  content="Allow Comments" :check=false />
                    <x-dashboard-form-submit-input name="Add"/>
                </x-dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
