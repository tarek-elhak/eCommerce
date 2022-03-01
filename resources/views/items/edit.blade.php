<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10 mt-10">
            <x-form.dashboard-form method="post"
                                   action="/admin/items/update/{{$item->name}}"
                                   header="edit {{$item->name}}"
                                   enctype="multipart/form-data"
                                   id="item__form"
            >
                <x-form.input type="text" name="name" placeholder="Name" value="{{$item->name}}"/>
                <x-form.textarea placeholder="Leave The Description Here" name="description" value="{!! $item->description !!}"/>
                <div class="flex mb-6 justify-between items-baseline">
                    <x-form.input type="text" name="price" placeholder="Price" value="{{$item->price}}" class="mb-0 mr-2 w-1/3"/>
                    <x-form.Select id="currency__list" heading="{{$item->currency}}" class="w-2/3" name="currency"/>
                </div>
                <div class="flex mb-6 justify-between items-baseline">
                    <x-form.Select id="country__list" class="mr-2 w-1/2" heading="{{$item->made_country}}" name="made_country"/>
                    <x-form.Select id="status__list" heading="{{$item->status}}" name="status" class="w-1/2"/>
                </div>
                <div class="flex justify-between items-center mb-6">
                    <x-form.file-input name="image" class="w-2/3 mr-2 mb-0"/>
                    <div class="w-1/3">
                        <img class="block" src="{{asset("/storage/$item->image")}}" alt="{{$item->name}} item image">
                    </div>
                </div>
                <x-form.input type="text" name="number_of_available_pieces" value="{{$item->number_of_available_pieces}}" placeholder="Number Of Available Pieces"/>
                <div class="flex justify-between items-baseline">
                    <x-form.Select id="category__list" heading="{{$item->category->category_name}}" :categories="$categories" class="w-2/3"/>
                    <x-form.submit name="Update"/>
                </div>
            </x-form.dashboard-form>
        </section>
    </x-dashboard-grid>
</x-layout>

