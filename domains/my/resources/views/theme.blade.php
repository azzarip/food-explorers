<div class="table-row float-none w-full">
    <div class="table-cell w-1/5 align-top shadow-lg max-lg:hidden 2xl:w-1/6">
        <ul class="mx-4 mt-5 border-b">
            <p class="pl-1 mb-2">Hallo,  {{ auth()->user()->name }}!</p>
            <li><a href="/home" class="block py-2 px-4 hover:bg-slate-100 border-t {{ request()->path() === 'home' ? 'font-semibold' : ''}}">
                <x-heroicon-s-home class="inline w-5 h-5 mb-1 mr-1" /> Home</a></li>

        </ul>
    </div>

    <div class="items-center justify-center table-cell w-3/5 lg:p-10">
        @yield('slot')
    </div>

</div>
