<div class="mb-6">
    <div class="w-full flex relative items-center">
        <input class="outline-0 p-2 border focus:border-indigo-900 flex-1 rounded" type="password" name="password" id="password" placeholder="password" />
        <!--
            -- TODO
            -- Eye Icon not working here
        -->
        <i class="fa fa-eye-slash absolute right-2 cursor-pointer"></i>
    </div>
    @error("password")
    <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
    @enderror
</div>
