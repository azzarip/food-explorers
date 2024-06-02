<form method="POST" action="/login">
    @csrf
    
    <div class="my-2">
        <label for="email" class="block text-xl text-left">Email:</label>
        <input type="text" name="email" id="email" class="w-full rounded" value="{{ old('email') }}" autofocus autocomplete="email">
    </div>  

    <div class="my-2">
        <label for="password" class="block text-xl text-left">Passwort:</label>
        <input type="password" name="password" id="password" class="w-full rounded">
    </div>
    <input type="hidden" name="remember" value="1">
    
    @php
        session(['url.intended' => url()->current()]);
    @endphp
    
    @if($errors->any())
        {!! implode('', $errors->all('<p class="error-msg mb-2">:message</p>')) !!}
    @endif

    <button type="submit" class="btn-b mb-2">Anmelden <x-heroicon-s-arrow-right class="inline w-7 h-7 mb-1" /></button>
    
    <p @click="forgot=true" class="block text-sm inline-link text-center">Passwort vergessen?</p>
    
    <p class="mt-8">Bist du neu auf Pizza Zero?</p>
    <a class="btn-b link mb-3" wire:click="resetFields" x-on:click="register=true">Jetzt Registrieren  <x-heroicon-s-arrow-right class="inline w-7 h-7 mb-1" /></a>
</form>