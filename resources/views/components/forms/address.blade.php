@props(['shipping' => true, 'billing' => true, 'mode' => 'new'])

@if ($mode != 'new')
<a class="link" href="{{ url()->current() }}">
    <x-heroicon-s-arrow-left class="inline w-5 h-5 mb-1 mr-1" /> Zurück
</a>
@endif

<h2 class="text-center font-head text-3xl mt-3">
@if ($mode == 'edit')
    Adresse Bearbeiten
@elseif($mode == 'create')
    Adresse Hinzufügen
@endif
</h2>
<div class="mx-auto">
    <form class="mt-5" action="/adresse" method="POST">
        @csrf

        <div class="my-2">
            <label for="name" class="block text-xl text-left">Name:</label>
            <input type="text" id="name" name="name" class="w-full rounded"
                value="{{ old('name') ?? auth()->user()->full_name }}">
            @error('name')
                <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
            @enderror
        </div>

        <div class="my-2" x-data="{ co: {{ old('co') ? 'true' : 'false'  }} }">
            <p class="text-sm link pl-2" x-show="!co" @click="co = true"><x-heroicon-s-plus-circle
                    class="inline w-5 h-5 mb-1" /> Firma, c/o, etc...</p>
            <div x-show="co" x-cloack>
                <label for="co" class="block text-xl text-left"><x-heroicon-s-minus-circle
                        class="inline w-5 h-5 mb-1" @click="co = false" />Firma - c/o:</label>
                <input type="text" id="co" name="co" class="w-full rounded" value="{{ old('co') }}" placeholder="(Optional)">
                @error('co')
                    <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="my-2">
            <label for="address" class="block text-xl text-left">Strasse und Hausnummer:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" class="w-full rounded" autofocus>
            @error('address')
                <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
            @enderror
        </div>
        <div class="my-2" x-data="{ additional: {{ old('additional') ? 'true' : 'false'  }} }">
            <p class="text-sm link pl-2" x-show="!additional" @click="additional = true"><x-heroicon-s-plus-circle
                    class="inline w-5 h-5 mb-1" /> zusätzliche Adresse</p>
            <div x-show="additional" x-cloack>
                <label for="additional" class="block text-xl text-left"><x-heroicon-s-minus-circle
                        class="link inline w-5 h-5 mb-1" @click="additional = false" />Zusätzliche Adresse:</label>
                <input type="text" id="additional" name="additional" class="w-full rounded" value="{{ old('additional') }}" placeholder="(Optional)">
                @error('additional')
                    <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-4 gap-2">
            <div class="my-2 col-span-3">
                <label for="city" class="block text-xl text-left">Stadt:</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}" class="w-full rounded">
            </div>

            <div class="my-2 col-span-1">
                <label for="zip" class="block text-xl text-left">Plz:</label>
                <input type="text" id="zip" name="zip" value="{{ old('zip') }}" class="w-full rounded">
            </div>
        </div>
        @error('city')
            <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
        @enderror
        @error('zip')
            <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
        @enderror

        <div class="my-2" x-data="{ info: {{ old('info') ? 'true' : 'false'  }} }">
            <p class="text-sm link pl-2" x-show="!info" @click="info = true"><x-heroicon-s-plus-circle
                    class="inline w-5 h-5 mb-1" /> info zum Versand</p>
            <div x-show="info" x-cloack>
                <label for="info" class="block text-xl text-left"><x-heroicon-s-minus-circle
                        class="link inline w-5 h-5 mb-1" @click="info = false" />Info zum Versand:</label>
                <textarea style="resize:none" rows="2" id="info" name="info" class="w-full rounded" 
                placeholder="Hier können Sie zusätzliche Informationen zum Versand hinzufügen">{{ old('info') }}</textarea>
                @error('info')
                    <p class="text-red-600 text-sm mb-1"> {{ $message }}</p>
                @enderror
            </div>
        </div>


        @if($mode == 'new')
         
         <input type="hidden" name="as_shipping" value="on">
         <input type="hidden" name="as_billing" value="on">
      
         <div class="mt-10">
            <button class="block btn-b"> <x-heroicon-s-plus class="inline w-5 h-5 mb-1 mr-1" /> Neue Adresse Hinzufügen</button>
        </div>
         @else
            <div x-data="{ 
                shipping_box: {{ $shipping ? 'true' : 'false' }}, 
                billing_box: {{ $billing  ? 'true' : 'false' }}, 
            }">

      
            <div class="my-4 text-xl">
                <p class="inline" :class="{'text-red-700' : !(shipping_box || billing_box)}">Diese Adresse hinzufügen als: </p>
                
                <div class="flex flex-col items-start sm:flex-row max-sm:pl-5 sm:justify-around  my-1">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-green-700 link" name="as_shipping"
                    x-model="shipping_box">
                     <span class="ml-2">Lieferadresse</span>
                </label>

                <label class="inline-flex items-center link">
                    <input type="checkbox" class="form-checkbox text-green-700 link" name="as_billing"
                    x-model="billing_box">
                    <span class="ml-2">Rechnungsadresse</span>
                </label>
                </div>      
            </div>

            @if($mode == 'edit')
                <input type="hidden" name="type" value="{{ request()->input('type') }}">
            @endif
      
        <button class="block btn-b mt-6
        " :class="{ 'disabled': !(shipping_box || billing_box) }"> <x-heroicon-s-plus class="inline w-5 h-5 mb-1 mr-1" /> Neue Adresse
            Hinzufügen</button>
        </div>
        @endif
    </form>


</div>

