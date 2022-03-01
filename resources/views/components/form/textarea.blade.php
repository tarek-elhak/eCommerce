@props(["placeholder" , "name" , "value" => ""])
<div class="mb-6">
<textarea
    class="p-2 w-full border border-px-gray focus:bg-indigo-50 focus:border-indigo-50"
    name="{{$name}}"
    rows="4"
    placeholder="{{$placeholder}}"
>
{{$value}}
</textarea>
@error($name)
<p class="text-red-500 text-xs font-semibold">{{$message}}</p>
@enderror
</div>
