@props(["header", "action" , "method"])

<form
    {{$attributes->merge(["enctype","id"])}}
      method="{{$method}}" action="{{$action}}"
      class="flex flex-col w-1/2 mx-auto bg-white p-16 drop-shadow-xl rounded-lg justify-center overflow-y-auto"
      autocomplete="off">
    @if($method == "post")
        @csrf
    @endif
    <header class="mx-auto">
        <h3 class="font-semibold text-lg">{{$header}}</h3>
    </header>
    <hr class="mb-8"/>
    {{$slot}}
    <div class="text-center">
        @if(session()->has("message"))
        <p class="text-red-500 text-xs font-semibold">{{session()->get("message")}}</p>
        @endif
    </div>
</form>
