@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(title: 'Food Explorers - Settle Petit Paris', robots: 'noindex, nofollow');

    $contact = $settlement->contact;
    $details = $settlement->details;
@endphp

@section('body')
    <main>
        <section class="mx-auto max-w-md p-6 ">
            <header>
                <h1 class="text-center text-3xl font-bold tracking-tight">Petit Paris</h1>
            </header>
            <p class="font-serif text-lg">Ciao {{ $contact->first_name }}!</p>


            @if ($details && $settlement->amount > 0)
                <p class="mt-2">
                    Here you can find the list of the additional expenses for our trip together:
                </p>

                <div class="mt-4 border rounded-lg overflow-hidden">
                    <div class="grid grid-cols-2 bg-slate-200 px-4 py-2 font-semibold">
                        <p>Description</p>
                        <p class="text-right">Price (EUR)</p>
                    </div>

                    @foreach ($details as $i => $item)
                        <div
                            class="grid grid-cols-2 px-4 py-2 {{ $i % 2 === 0 ? 'bg-white' : 'bg-slate-100' }} {{ $item['amount'] < 0 ? 'text-green-700' : '' }}">
                            <p>{{ $item['description'] }}</p>
                            <p class="text-right">{{ number_format($item['amount'], 2) }}</p>
                        </div>
                    @endforeach

                    <div class="grid grid-cols-2 bg-slate-200 px-4 py-2 font-semibold">
                        <p>Total</p>
                        <p class="text-right">€ {{ number_format($settlement->amount, 2) }}</p>
                    </div>
                </div>


                <section x-data="{ currency: null }" class="mt-8">
                    <p class="mb-3 text-lg font-medium">
                        In which currency would you like to settle this amount?
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <button type="button" @click="currency = 'EUR'"
                            :class="currency === 'EUR'
                                ?
                                'bg-amber-500 text-black' :
                                'bg-black text-white'"
                            class="w-full cursor-pointer font-semibold text-center rounded-full py-2 transition-colors">
                            in EUR
                        </button>

                        <button type="button" @click="currency = 'CHF'"
                            :class="currency === 'CHF'
                                ?
                                'bg-amber-500 text-black' :
                                'bg-black text-white'"
                            class="w-full cursor-pointer font-semibold text-center rounded-full py-2 transition-colors">
                            in CHF
                        </button>
                    </div>

                    <div class="mt-5 space-y-4">

                        {{-- EUR section --}}
                        <div x-show="currency === 'EUR'" x-cloak x-transition x-data="{ bank: false }"
                            class="rounded-lg border bg-white p-4">
                            <h3 class="mb-2 text-lg font-semibold">Settle in EUR (€)</h3>

                            <p class="text-4xl font-serif font-semibold mb-4 text-left">€ {{ $settlement->amount }}</p>

                            <div class="grid grid-cols-2 gap-4 mb-4">

                                <a href="https://buy.stripe.com/28E4gAa0ReHj7WX75f9ws06?prefilled_email={{ urlencode($contact->email) }}"
                                    target="_blank"
                                    class="group flex items-center justify-center gap-2 w-full border-2 rounded-lg border text-black text-2xl font-semibold py-3 px-5 shadow-md transition">
                                    <x-heroicon-s-credit-card class="w-8 h-8" />
                                    <span>Card</span>
                                </a>

                               <a href="https://wise.com/pay/business/preminhazzari?amount={{ $settlement->amount }}&currency=EUR&description=Petit+Paris+-+{{ str_replace(' ', '+', $contact->full_name) }}"
                                    target="_blank"
                                    class="group flex items-center justify-center gap-2 w-full rounded-lg bg-[#9fe870] text-black text-2xl font-semibold py-3 px-5 shadow-md hover:bg-[#65cf21] transition">
                                    <img src="https://cdn.brandfetch.io/idk6fxo1w1/theme/dark/symbol.svg?c=1bxid64Mup7aczewSAYMX&t=1714558173511"
                                        alt="Wise" style="height:20px; width:auto; display:block"
                                        onerror="this.style.display='none'" />
                                    <span>Wise</span>
                                </a>
                            </div>

                            <button type="button"
                                class="flex items-center justify-center gap-2 border-4 border-gray-900 w-full rounded-lg cursor-pointer font-semibold py-2 px-5 shadow-md transition"
                                :class="bank
                                    ?
                                    'bg-gray-100 text-black' :
                                    'bg-gray-900 text-white'"
                                @click="bank = !bank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10.5V21h18V10.5M12 3 3 10.5h18L12 3zM9.75 21v-6.75m4.5 0V21" />
                                </svg>
                                <span>Bank Transfer</span>
                            </button>

                            <div x-show="bank" x-cloak class="mt-3 rounded-lg border bg-gray-50 p-4 text-sm">
                                <p class="font-semibold mb-1">Bank Transfer Details (EUR)</p>
                                <ul class="space-y-1 text-gray-700 mb-2">
                                    <li><strong>Beneficiary:</strong> Prem Inh Azzari</li>
                                    <li><strong>IBAN:</strong> CH70 0483 5207 7501 6200 0</li>
                                    <li><strong>Address:</strong> Knüslistrasse 8, 8004 Zürich</li>
                                    <li><strong>BIC/SWIFT:</strong> CRESCHZZXXX</li>
                                    <li><strong>Reference:</strong> Petit Paris - {{ $contact->full_name }}</li>
                                    <li><strong>Amount:</strong> {{ $settlement->amount }} EUR</li>
                                </ul>

                                <a href="/download/QR_EUR.pdf" target="_blank"
                                    class="block bg-gray-900 text-white text-center w-full rounded-lg font-semibold py-3 px-5 shadow-md hover:bg-gray-800 transition"><x-heroicon-o-arrow-down-tray
                                        class="w-6 h-6 inline" /> Download QR Invoice</a>
                            </div>
                        </div>

                        {{-- CHF section --}}
                        <div x-show="currency === 'CHF'" x-cloak x-transition x-data="{ bank: false }"
                            class="rounded-lg border bg-white p-4">
                            <h3 class="mb-2 text-lg font-semibold">Settle in CHF</h3>
                            <p class="text-4xl font-serif font-semibold mb-1 text-left">CHF {{ $settlement->converted_amount }}</p>
                            <p class="text-sm text-gray-600 mb-4">CHF/EUR = {{ $settlement->conversion_factor }} <a class="hover:underline text-gray-600" target="_blank" href="https://www.backend-rates.bazg.admin.ch/pdfavg?j=2025&currencyId=42&activeSearchType=avg&locale=en">(?)</a> </p>
                            <div class="grid grid-cols-2 gap-4 mb-4">

                                <a href="https://buy.stripe.com/3cI7sM2yp0Qt0uv89j9ws05?prefilled_email={{ urlencode($contact->email) }}"
                                    target="_blank"
                                    class="group flex items-center justify-center gap-2 w-full border-2 rounded-lg border text-black text-xl font-semibold py-3 px-5 shadow-md transition">
                                    <x-heroicon-s-credit-card class="w-8 h-8" />
                                    <span>Card / Twint</span>
                                </a>
                                
                                <a href="https://wise.com/pay/business/preminhazzari?amount={{ $settlement->converted_amount }}&currency=CHF&description=Petit+Paris+-+{{ str_replace(' ', '+', $contact->full_name) }}"
                                    target="_blank"
                                    class="group flex items-center justify-center gap-2 w-full rounded-lg bg-[#9fe870] text-black text-2xl font-semibold py-3 px-5 shadow-md hover:bg-[#65cf21] transition">
                                    <img src="https://cdn.brandfetch.io/idk6fxo1w1/theme/dark/symbol.svg?c=1bxid64Mup7aczewSAYMX&t=1714558173511"
                                        alt="Wise" style="height:20px; width:auto; display:block"
                                        onerror="this.style.display='none'" />
                                    <span>Wise</span>
                                </a>

            
                            </div>

                            <button type="button"
                                class="flex items-center justify-center gap-2 border-4 border-gray-900 w-full rounded-lg cursor-pointer font-semibold py-2 px-5 shadow-md transition"
                                :class="bank
                                    ?
                                    'bg-gray-100 text-black' :
                                    'bg-gray-900 text-white'"
                                @click="bank = !bank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10.5V21h18V10.5M12 3 3 10.5h18L12 3zM9.75 21v-6.75m4.5 0V21" />
                                </svg>
                                <span>Bank Transfer</span>
                            </button>

                            <div x-show="bank" x-cloak class="mt-3 rounded-lg border bg-gray-50 p-4 text-sm">
                                <p class="font-semibold mb-1">Bank Transfer Details (CHF)</p>
                                <ul class="space-y-1 text-gray-700 mb-2">
                                    <li><strong>Beneficiary:</strong> Prem Inh Azzari</li>
                                    <li><strong>IBAN:</strong> CH07 0483 5207 7501 6100 0</li>
                                    <li><strong>Address:</strong> Knüslistrasse 8, 8004 Zürich</li>
                                    <li><strong>BIC/SWIFT:</strong> CRESCHZZXXX</li>
                                    <li><strong>Reference:</strong> Petit Paris - {{ $contact->full_name }}</li>
                                    <li><strong>Amount:</strong> CHF {{ $settlement->converted_amount }}</li>
                                </ul>

                                <a href="/download/QR_CHF.pdf" target="_blank"
                                    class="block bg-gray-900 text-white text-center w-full rounded-lg font-semibold py-3 px-5 shadow-md hover:bg-gray-800 transition"><x-heroicon-o-arrow-down-tray
                                        class="w-6 h-6 inline" /> Download QR Invoice</a>
                            </div>
                        </div>
                    </div>
                </section>


                <p class="mt-12 mx-2"><strong>Something is wrong?</strong> <br> In case of any problems, just contact me and we
                    figure out.</p>
            @else
                <div class="mt-4 px-4 py-4 text-center text-gray-600">
                    Everything is ok! 🎉 No additional expenses.
                </div>
            @endif
    </main>

@endsection
