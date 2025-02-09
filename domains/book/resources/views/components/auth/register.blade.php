
<x-forms::base :action="route('register')" button="Proceed to Booking">
        @csrf
        @error('user')
        <p class="px-2 py-1 text-black rounded-xl" style="background-color: #fca5a5;"><x-heroicon-o-exclamation-triangle
            style="display: inline; width: 24px; height: 24px;" />
            @lang("teavel::auth.$message")</p>
        @enderror

        <x-forms::field.first_name />

        <x-forms::field.last_name />

        <x-forms::field.email />

        <x-forms::field.phone />

        <x-forms::field.password new=true />

        <x-forms::field.privacy_policy />

</x-forms::base >

<div class="mt-8">
<p class="mb-1 text-xl">Are you already a member?</p>
<a href="{{ request()->url() }}?v=login"
    class="block w-full max-w-lg py-1 mx-auto text-2xl text-center border-4 border-yellow-500 rounded-full hover:bg-yellow-500">
    Log in here <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
</a>
</div>