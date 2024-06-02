<div x-data="{logout: false}" x-cloak x-show="logout" @logout.window="logout = true" class="bg-black/50 fixed left-0 top-0 bottom-0 right-0 z-10 flex items-center justify-center">
    <div x-show="logout" x-transition.scale.origin.right.50 @click.outside="logout = false"
        class="bg-white rounded-lg w-2/3 md:w-1/4 fixed z-20 ">
        <h2 class="text-center text-2xl py-5">Log out?</h2>
        <form action="/logout" method="POST" class="text-lg flex justify-around py-5">
            @csrf
            <button class="h-full text-center w-[100px] border-2 border-black bg-black text-white" type=button @click="logout = false">Cancel</button>
            <button class="h-full text-center w-[100px] border-2 border-black">Logout  <x-heroicon-s-x-mark class="text-red-500 inline w-5 h-6" /></button>
        </form>
    </div>
</div>