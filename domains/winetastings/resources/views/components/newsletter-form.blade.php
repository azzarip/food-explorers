   <section class="mt-6 lg:mt-12">
                <hr class="w-3/4 border-slate-700 mx-auto">
                <div class="mx-auto  max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4"
                    id="form">
                    <p class="text-xl lg:text-3xl font-bold mb-2 text-center">Join the Zurich Wine Compass!</p>
                    <p class="text-center lg:text-xl">Never miss a Wine Tasting in Zurich again.</p>
                        <x-forms::base class="mx-auto max-w-lg" name="newsletter-form" id="newsletter-form">
                        <x-forms::field.email />
                        <div class="space-y-4 ml-2">
                            <x-forms::field.privacy_policy star=true />
                            <div class="inline-flex items-start">
                                <input type="checkbox" name="age" id="age" class="w-4 h-4 mt-1" required>
                                <label for="age" class="ml-2">I am 18 years old or older.<span
                                        class="text-red-600 text-sm">*</span> </label>
                            </div>

                            <div class="inline-flex items-start">
                                <input type="checkbox" name="spirits" id="spirits" class="w-4 h-4 mt-1">
                                <label for="spirits" class="ml-2">I am also interested in other drinks and spirits tastings. <span class="text-slate-800 italic">(Optional)</span></label>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200">
                            Yes, I want to be informed about wine tastings in Zurich!
                        </button>
                    </x-forms::base>

                    <p
                        class="mt-4 w-fit mx-auto items-center gap-2 rounded-full border border-rose-200 bg-white/70 px-3 py-1 text-xs font-medium text-rose-700 shadow-sm backdrop-blur">
                        🍷 Curated weekly · Cancel anytime
                    </p>
                </div>
            </section>