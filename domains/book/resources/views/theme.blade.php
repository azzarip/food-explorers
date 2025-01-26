
<div>
    <header>
        <div class="mx-auto my-4 w-fit">
    
            <div class="flex flex-row items-center" x-data="{ menu: false }">
                <img src="@image('logo_sm.webp')" alt="Food Explorers logo" class="w-12 mx-1 mb-1 sm:w-16 lg:w-20 aspect-square">
                <span class="pb-2 ml-3 text-2xl font-semibold text-center sm:text-4xl font-trajan lg:text-5xl">food explorers</span>
                @auth
                    <div class="relative pb-2">
                        <x-heroicon-o-bars-3 class="w-6 ml-4 cursor-pointer " x-show=!menu @click="menu = true" />
                        <x-heroicon-o-x-mark class="w-6 ml-4 cursor-pointer " x-show=menu x-cloak @click="menu = false" />
                        <div x-cloak class="absolute z-40 px-4 py-1 bg-white border rounded-lg top-full max-md:right-0 min-w-max"
                            x-show=menu>
                            <p class="py-1 whitespace-nowrap">Hi {{ auth()->user()->first_name }}!</p>
                            <hr>
                            <p class="p-1 rounded-lg cursor-pointer whitespace-nowrap hover:bg-slate-100"
                                @click="$dispatch('logout')"><x-heroicon-o-arrow-left-start-on-rectangle
                                    class="inline w-4 mr-2 cursor-pointer" />Logout</p>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </header>
    
    {{ $slot }}

<x-footer agb=true />
</div>
    
    