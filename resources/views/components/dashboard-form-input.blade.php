@props(["type","name","placeholder"])
<div class="mb-6">
    <input class=" border focus:border-indigo-900 outline-0 w-full p-2 rounded"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           placeholder="{{$placeholder}}"
    />
    @error($name)
        <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
    @enderror
</div>
