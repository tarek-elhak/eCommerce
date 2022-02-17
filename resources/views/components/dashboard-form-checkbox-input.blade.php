@props(["content","check","name"])
<div class="flex justify-between items-center mb-4" >
    <span class="px-4 py-2 bg-indigo-50 text-gray-700 font-xl font-bold rounded-xl">{{$content}}</span>
    <label class="checker" >
        <input class="checkbox" type="checkbox" name="{{$name}}" {{$check ? 'checked' : ''}} />
        <div class="checkmark">
            <svg viewBox="0 0 100 100">
                <path d="M20,55 L40,75 L77,27"
                      fill="none"
                      stroke="#FFF"
                      stroke-width="15"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
            </svg>
        </div>
    </label>
</div>
@error($name)
<p class="text-red-500 text-xs font-semibold">{{$message}}</p>
@enderror
