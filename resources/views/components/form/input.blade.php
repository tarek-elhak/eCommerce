@props(["type","name","placeholder","value" => ""])

<div {{$attributes->merge(["class" => "mb-6"])}}>
    <input
           class = "mb-1 w-full border focus:border-indigo-50 outline-0 p-2 rounded focus:bg-indigo-50"]
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           placeholder="{{$placeholder}}"
           value="{{$value}}"

    />
    @error($name)
        <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
    @enderror
</div>
