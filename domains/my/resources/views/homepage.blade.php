@extends('azzarip::layouts.1col')

@section('main')
<p class="mx-4 mt-4 text-3xl font-semibold md:text-3xl font-head">@lang('Hi') {{ auth()->user()->first_name }}!</p>
@endsection
