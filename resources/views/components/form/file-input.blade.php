@props(["name"])
<div class="mb-6">
    <label for="input__item__image" id="label__item__image"
           class="block mb-1 w-full bg-indigo-50 h-24 outline outline-dashed outline-indigo-200 relative">
        <p class="absolute text-gray-600 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-xl">
            Select / Drop the image
        </p>
        <input
            id="input__item__image" type="file" name="{{$name}}"
            accept="image/*"
            style="display: none"
        />
    </label>

    <div id="file__name__wrapper" class="h-12 bg-indigo-50 mb-6">
        <p class="file__name w-fit"></p>
    </div>
    @error($name)
        <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
    @enderror
</div>
