@props(["name"])
<button type="submit"
        {{$attributes->merge([
        "class" => "text-center px-8 py-2 bg-indigo-800 hover:bg-indigo-900 text-white font-semibold rounded"
        ])}}
>
    {{$name}}
</button>
