@extends('book::layouts.simple-event')

@section('second_column')
<div class="max-w-sm mx-auto">
    @if (request()->query('v') == 'login')
        <x-book::auth.login />
    @else
        <x-book::auth.register />
    @endif
</div>
@endsection