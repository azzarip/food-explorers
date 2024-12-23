@extends('azzarip::layouts.1col')


@section('main')
<div class="max-w-3xl mx-auto mt-16 max-lg:px-2">
    <a href="/options" class="block cursor-pointer"><x-heroicon-o-arrow-left class="inline w-6 h-6" /> @lang('Options')</a>
    <h1 class="mt-4 mb-4 text-3xl font-semibold text-center font-head">@lang('teavel::auth.reset_password')</h1>

    <div class="max-w-sm mx-auto">
        <x-forms::password.change />
    </div>

</div>

@endsection