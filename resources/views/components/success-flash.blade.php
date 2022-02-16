@props(["message"])

<div
    x-init="setTimeout(()=> {show = false}, 3000)"
    x-data="{show: true}"
    x-show="show"
    x-transition.opacity.duration.1000ms
>
    <span
        class="absolute right-2 top-4 px-6 py-2
               bg-green-200 text-green-500 border border-green-500 text-xs uppercase font-bold
               rounded-lg"
    >
            {{$message}}
    </span>
</div>

