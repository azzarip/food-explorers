
<h2 class="text-2xl font-bold text-center font-trajan">Log in to complete your reservation</h2>
<x-forms::login />

<div class="mt-8">
<p class="mb-1 text-xl">Are you new?</p>
<a href="{{ request()->url() }}"
    class="block w-full max-w-lg py-1 mx-auto text-2xl text-center border-4 border-yellow-500 rounded-full hover:bg-yellow-500">
    Become a Food Explorer <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
</a>
</div>