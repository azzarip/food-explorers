<div x-data="{logout: false}" x-cloak x-show="logout" @logout.window="logout = true" class="fixed top-0 bottom-0 left-0 right-0 z-10 flex items-center justify-center w-full bg-black/50">
    <div x-show="logout" x-transition.scale.origin.right.50 @click.outside="logout = false"
        class="fixed z-20 w-4/5 max-w-lg bg-white rounded-lg lg:w-2/3">
        <p class="py-5 text-2xl text-center">Do you really want to logout?</p>
        <form action="/logout" method="POST" class="flex justify-around pt-2 pb-5 text-lg font-semibold">
            @csrf
            <button class="h-full px-4 py-1 text-center text-white bg-black border-[3px] border-black rounded-lg" type=button @click="logout = false">Cancel</button>
            <button class="h-full px-4 py-1 text-center border-2 border-black rounded-lg">Logout  <x-heroicon-s-arrow-right-start-on-rectangle class="inline w-5 h-6 mb-1 text-red-500" /></button>
        </form>
    </div>
</div>
