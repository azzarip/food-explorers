    <form method="POST" action="/">
        @csrf
        <div class="mt-10 space-y-5">
            <x-inputbox name="name" placeholder="Deinen Vorname..." label="Vorname" required=True />
            <x-inputbox name="surname" placeholder="Deinen Nachname..." label="Nachname" />

        <div class="pt-3 my-2">
            <label for="email" class="block text-xl text-left">E-Mail<span class="text-red-500"> *</span>:</label>
            <input type="email" id="email" placeholder="Deine Email..." name="email"
                class="w-full rounded" value="{{ old('email') }}">
            <p class="text-red-600 texttext-sm">{{ $errors->first('email') }}</p>
        </div>
        </div>

        <div class="py-3 my-2 text-left">
            <input type="checkbox" id="gdpr" name="gdpr" @checked(old('gdpr')) required
                class="w-6 h-6 text-primary"> 
                <label for="gdpr" class="text-sm">Ich akzeptiere die <a href="/privacy-policy" class="underline">Privacy
                Policy</a> und Informationen über Pizza Rezepte, Pizza Verastaltungen und andere Produkte zu erhalten.<span class="text-red-500">*</span> </label>
            <p class="text-red-600 texttext-sm">{{ $errors->first('gdpr') }}</p>
        </div>
        <input type="hidden" name="source" value="zero-to-hero"/>
        <div class="text-center">
            <button type="submit" class="w-full py-3 text-2xl font-medium text-white bg-black border-4 border-black hover:bg-white hover:text-black ">
                Zur ersten Lektion!
                <x-heroicon-s-arrow-right class="inline w-10 h-7" />
            </button>
        </div>
    </form>
