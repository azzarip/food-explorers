<div x-data="{ open: false }" x-init="width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
if (width > 1040) { open = true; }"
    @resize.window="width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (width > 1040) { open = true;}">
    <div id="menuButton" class="fixed top-0 left-0 z-50 p-4 lg:hidden">
        <x-heroicon-o-bars-3 class="w-8 h-8 text-gray-900 cursor-pointer" @click="open = true" x-show="!open" />
        <x-heroicon-o-x-mark class="w-8 h-8 text-white cursor-pointer" @click="open = false" x-show="open" x-cloak />
    </div>

    <div id="screen" class="flex flex-col justify-between w-full min-h-screen">
        <div id="page" class="flex flex-1 w-full">
            <div id="sidebar"
                class="flex flex-col justify-between font-semibold text-white bg-gray-900 shadow-xl shadow-gray-900 w-80"
                x-show="open" x-transition:enter="transition duration-300"
                x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0"
                x-transition:leave="transition duration-300" x-transition:leave-start="transform translate-x-0"
                x-transition:leave-end="transform -translate-x-full">
                <div id="top">
                    <div class="w-24 p-1 mx-auto mt-4 mb-2 bg-white border-4 border-green-900 rounded-full lg:border-[6px] lg:w-32">
                        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
                    </div>
                    <p class="text-center">Food Explorers</p>
                    <p class="hidden my-2 ml-8 lg:block"> <span class="font-normal">Hi</span> {{ auth()->user()->first_name }},</p>
                    <nav>
                        <ul>
                            <li>
                                <a class="block w-full py-3 pl-4 border-green-600 {{ request()->path() == '/' ? 'bg-gray-700 border-l-green-600 border-l-4' : 'hover:bg-gray-800' }}"
                                    href="/">Home</a>
                            </li>
                            <li>
                                <a class="block w-full py-3 pl-4 border-green-600 {{ request()->path() == 'events' ? 'bg-gray-700 border-l-4' : 'hover:bg-gray-800' }}"
                                    href="/events">Events</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div id="userinfo" x-data="{ userInfo: false }">
                    <div class="lg:hidden">
                        <hr class="mt-1 mb-2">
                        <div class="">

                        </div>
                        <p class="px-2 mb-4">{{ auth()->user()->full_name }}
                            <span class="font-normal">{{ auth()->user()->email }} </span>
                        </p>
                        <button class="w-full px-1 pt-1 ml-1 text-left hover:bg-gray-200" @click="$dispatch('logout')">
                            <x-heroicon-o-arrow-right-start-on-rectangle class="inline w-5 mb-1" /> Logout
                        </button>

                    </div>
                    <div class="relative w-full py-4" @mouseleave="userInfo = false">
                        <div @click="userInfo = !userInfo"
                            class="items-center justify-center hidden w-12 h-12 mx-auto text-center text-gray-900 bg-gray-200 border-2 border-green-600 rounded-full cursor-pointer lg:flex ">
                            <p class="mx-auto my-auto">
                                {{ substr(auth()->user()->first_name, 0, 1) }}{{ substr(auth()->user()->last_name, 0, 1) }}
                            </p>
                        </div>
                        <div x-show="userInfo" x-cloak @click.away="userInfo = false"
                            class="absolute mb-5 ml-5 bottom-1/2 left-1/2 w-52">
                            <div class="p-4 text-black bg-white rounded-lg shadow-xl ">
                                <p>{{ auth()->user()->full_name }}</p>
                                <p class="font-normal">{{ auth()->user()->email }}</p>
                                <hr class="mt-1 mb-2">
                                <button class="w-full px-1 pt-1 text-left rounded-lg hover:bg-gray-200"
                                    @click="$dispatch('logout')">
                                    <x-heroicon-o-arrow-right-start-on-rectangle class="inline w-5 mb-1" /> Logout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="z-0 w-full max-md:absolute max-md:start-0 lg:flex-1">
                {{ $slot }}
            </div>
        </div>

        <x-footer class="hidden"/>
    </div>

</div>

<x-modals.logout />
</div>
