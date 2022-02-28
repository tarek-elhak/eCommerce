<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10 mt-10">
            <x-form.dashboard-form method="post"
                                   action="store"
                                   header="add new item"
                                   enctype="multipart/form-data"
                                   id="item__form"
            >

                <x-form.input type="text" name="item_name" placeholder="Name" />
                <x-form.textarea placeholder="Leave The Description Here"/>
                <div class="flex mb-6 justify-between items-center">
                    <x-form.input type="text" name="price" placeholder="Price" class="mb-0 mr-2 w-1/2"/>
                    <x-form.Select id="currency__list" heading="Select Currency"/>
                </div>
                <div class="flex mb-6 justify-between items-center">
                    <x-form.Select id="country__list" class="mr-2" heading="Country Made"/>
                    <x-form.Select id="status__list" heading="Item Status"/>
                </div>
                <x-form.file-input />
                <x-form.input type="text" name="number_of_pieces" placeholder="Number Of Available Pieces"/>
                <div class="flex justify-between items-center">
                    <x-form.Select id="category__list" heading="Item Category" :categories="$categories"/>
                    <x-form.submit name="Add Item"/>
                </div>
            </x-form.dashboard-form>
        </section>
    </x-dashboard-grid>
</x-layout>

