@extends('azzarip::layouts.base', [
    'nav' => false,
    'bg' => 'bg-gradient-to-br from-[#021015] to-[#1b5a55]',
])

@php
    $seo = new SEO(title: 'Food Explorers - Linktree');
    $seo->markAsNoindex();
@endphp

@section('body')
    <main>
        <div class="mx-auto w-fit flex items-center mt-4 lg:mt-10 ">
            <img src="@image('logo_sm.webp')" alt="Food Explorers Logo" width="65" height="60">
            <span class="text-2xl lg:text-4xl space-y-3 text-white font-trajan">Food Explorers</span>
        </div>
        <div x-data="{ choice: '{{ request()->get('choice', 'food') }}' }" class=" flex flex-col items-center mx-auto mt-2 max-w-md w-full">
            <div class="relative inline-flex gap-3 rounded-full bg-gray-800 p-2 text-white mx-auto">
                <button @click="choice = 'food'"
                    :class="choice === 'food'
                        ?
                        'bg-[#dda407]  text-black shadow-md' :
                        'text-white hover:bg-gray-600'"
                    class="px-4 py-2 cursor-pointer rounded-full text-sm lg:text-2xl font-medium transition-all duration-200">
                    🍽️ Food
                </button>
                <button @click="choice = 'drinks'"
                    :class="choice === 'drinks'
                        ?
                        'bg-[#dda407]  text-black shadow-md' :
                        'text-white hover:bg-gray-600'"
                    class="px-4 py-2 cursor-pointer rounded-full text-sm lg:text-2xl font-medium transition-all duration-200">
                    🥂 Drinks
                </button>
            </div>

            <div class="flex flex-col gap-5 w-full mx-auto mt-8 text-lg font-semibold" x-show="choice === 'drinks'"
                id="drink-part" x-cloak x-data="{
                    open: false,
                    link: 'https://chat.whatsapp.com/EuInN7yATNLIdFItBmGDdX',
                    copied: false,
                    async copy() {
                        try {
                            await navigator.clipboard.writeText(this.link);
                            this.copied = true;
                        } catch (e) {
                            const ta = document.createElement('textarea');
                            ta.value = this.link;
                            document.body.appendChild(ta);
                            ta.select();
                            document.execCommand('copy');
                            document.body.removeChild(ta);
                            this.copied = true;
                        }
                        setTimeout(() => this.copied = false, 1500);
                    },
                    async share() {
                        try {
                            await navigator.share({
                                title: 'Join our WhatsApp Group',
                                text: 'Join our WhatsApp group:',
                                url: this.link
                            });
                        } catch (_) {}
                    }
                }">

                <div class="rounded-full p-2 bg-[#dda407] flex items-center gap-2 w-full cursor-pointer justify-between lg:text-lg text-sm"
                    @click="open = !open">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png?20220228223904"
                        alt="Whatsapp Icon" class="block shrink-0 w-6 h-6 mx-2">
                    <p>Élite Bar Explorers Whatsapp Group</p>
                    <span :class="{ 'rotate-180': open }">
                        <x-heroicon-o-chevron-down class="w-6 h-6 mr-2" />
                    </span>
                </div>

                <div class="flex flex-col gap-2" x-cloak x-show="open" x-transition>
                    <img src="@image('ebe_whatsapp_qr.webp')" alt="ebe whatsapp qr code" class="w-32 h-32 mx-auto bg-white" />

                    <p class="mt-3 text-sm break-all text-center text-white">
                        <a :href="link" target="_blank" rel="noopener noreferrer"
                            class="underline hover:no-underline">
                            <span x-text="link"></span>
                        </a>
                    </p>

                    <!-- Actions -->
                    <div class="mt-1 flex justify-center gap-3">
                        <button @click="copy"
                            class="cursor-pointer px-4 py-2 rounded-full bg-black text-white text-sm font-medium hover:opacity-90 active:opacity-80"
                            type="button">
                            Copy link
                        </button>

                        <button @click="share"
                            class="cursor-pointer px-4 py-2 rounded-full bg-black text-white text-sm font-medium hover:opacity-90 active:opacity-80"
                            type="button">
                            Share
                        </button>
                    </div>
                    <div x-show="copied" x-transition
                        class="mt-3 text-center text-xs text-green-700 bg-green-50 border border-green-200 px-3 py-1 rounded-full">
                        Link copied!
                    </div>
                </div>


                <a href="{{ durl('/bars', 'zurichgems') }}"
                    class="flex rounded-full p-2 bg-[#dda407] items-center gap-2 w-full cursor-pointer justify-between lg:text-lg text-sm">
                    <span class="mx-2">🍸</span>
                    <p>Zurich Best Bars</p>
                    <x-heroicon-o-arrow-right class="w-6 h-6 mr-2" />
                </a>


                <a href="{{ durl('/', 'winetastings') }}"
                    class="flex rounded-full p-2 bg-[#dda407] items-center gap-2 w-full cursor-pointer justify-between lg:text-lg text-sm">
                    <span class="mx-2">🍷</span>
                    <p>Zurich Wine Compass</p>
                    <x-heroicon-o-arrow-right class="w-6 h-6 mr-2" />
                </a>


            </div>


            <div class="flex flex-col gap-5 w-full mx-auto mt-8 text-lg font-semibold" x-show="choice === 'food'"
                id="drink-part" x-cloak x-data="{
                    open: false,
                    link: 'https://chat.whatsapp.com/EuInN7yATNLIdFItBmGDdX',
                    copied: false,
                    async copy() {
                        try {
                            await navigator.clipboard.writeText(this.link);
                            this.copied = true;
                        } catch (e) {
                            const ta = document.createElement('textarea');
                            ta.value = this.link;
                            document.body.appendChild(ta);
                            ta.select();
                            document.execCommand('copy');
                            document.body.removeChild(ta);
                            this.copied = true;
                        }
                        setTimeout(() => this.copied = false, 1500);
                    },
                    async share() {
                        try {
                            await navigator.share({
                                title: 'Join our WhatsApp Group',
                                text: 'Join our WhatsApp group:',
                                url: this.link
                            });
                        } catch (_) {}
                    }
                }">

                <div class="rounded-full p-2 bg-[#dda407] flex items-center gap-2 w-full cursor-pointer justify-between lg:text-lg text-sm"
                    @click="open = !open">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png?20220228223904"
                        alt="Whatsapp Icon" class="block shrink-0 w-6 h-6 mx-2">
                    <p>Food Explorers Whatsapp Group</p>
                    <span :class="{ 'rotate-180': open }">
                        <x-heroicon-o-chevron-down class="w-6 h-6 mr-2" />
                    </span>
                </div>

                <div class="flex flex-col gap-2" x-cloak x-show="open" x-transition>
                    <img src="@image('fex_whatsapp_qr.webp')" alt="ebe whatsapp qr code" class="w-32 h-32 mx-auto bg-white">
                    <p class="mt-3 text-sm break-all text-center text-white">
                        <a :href="link" target="_blank" rel="noopener noreferrer"
                            class="underline hover:no-underline">
                            <span x-text="link"></span>
                        </a>
                    </p>

                    <div class="mt-1 flex justify-center gap-3">
                        <button @click="copy"
                            class="cursor-pointer px-4 py-2 rounded-full bg-black text-white text-sm font-medium hover:opacity-90 active:opacity-80"
                            type="button">
                            Copy link
                        </button>

                        <button @click="share"
                            class="cursor-pointer px-4 py-2 rounded-full bg-black text-white text-sm font-medium hover:opacity-90 active:opacity-80"
                            type="button">
                            Share
                        </button>
                    </div>
                    <div x-show="copied" x-transition
                        class="mt-3 text-center text-xs text-green-700 bg-green-50 border border-green-200 px-3 py-1 rounded-full">
                        Link copied!
                    </div>
                </div>


            </div>
        </div>

    </main>
@endsection

@push('scripts')
    <script></script>
@endpush
