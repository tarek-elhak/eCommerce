<x-layout title="Add New Item">
    <x-dashboard-grid>
        <section class="col-span-10 mt-10">
            <x-form.dashboard-form method="post"
                                   action="store"
                                   header="add new item"
                                   enctype="multipart/form-data"
                                   id="item__form"
            >
                <x-form.input type="text" name="name" placeholder="Name"/>
                <x-form.textarea placeholder="Leave The Description Here" name="description"/>
                <div class="flex mb-6 justify-between items-baseline">
                    <x-form.input type="text" name="price" placeholder="Price" class="mb-0 mr-2 w-1/3"/>
                    <x-form.Select id="currency__list" heading="Select Currency" class="w-2/3" name="currency"/>
                </div>
                <div class="flex mb-6 justify-between items-baseline">
                    <x-form.Select id="country__list" class="mr-2 w-1/2" heading="Country Made" name="made_country"/>
                    <x-form.Select id="status__list" heading="Item Status" name="status" class="w-1/2"/>
                </div>
                <x-form.file-input name="image"/>
                <x-form.input type="text" name="number_of_available_pieces" placeholder="Number Of Available Pieces"/>
                <div class="flex justify-between items-baseline">
                    <x-form.Select id="category__list" heading="Item Category" :categories="$categories" class="w-2/3"/>
                    <x-form.submit name="Add Item"/>
                </div>
            </x-form.dashboard-form>
        </section>
    </x-dashboard-grid>
</x-layout>

