@extends('azzarip::base')

@section('body')
<div class="flex flex-row flex-1">
    <aside class="w-[calc(50%-384px)] max-lg:hidden">@yield('aside-left')</aside>
    <main class="flex-1 table text-xl max-md:px-2 wrapper"> @yield('main') </main>
    <aside class="w-[calc(50%-384px)] max-lg:hidden">@yield('aside-right')</aside>
</div>
@endsection


