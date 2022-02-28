@props(["heading", "id" => '' , "categories" => ""])
@if($id == "category__list")
    <div {{$attributes->merge(["class" => "select__box"])}}>
        <div id="{{$id}}" class="options__container bg-indigo-50">
            @foreach($categories as $category)
                <label class="option bg-indigo-200 flex items-center hover:bg-indigo-400" for="{{$category->category_name}}">
                    <div class="category__name">{{$category->category_name}}</div>
                    <input type="radio" class="radio" id="{{$category->category_name}}" name="category">
                </label>
            @endforeach
        </div>
        <div class="selected bg-indigo-50 border">
            {{$heading}}
        </div>
    </div>
@else
    <div {{$attributes->merge(["class" => "select__box"])}}>
        <div id="{{$id}}" class="options__container bg-indigo-50">
        </div>
        <div class="selected bg-indigo-50 border">
            {{$heading}}
        </div>
    </div>
@endif
