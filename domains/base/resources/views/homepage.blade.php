@extends('azzarip::layouts.1col')

@php
    $seo = new SEO(
        title: 'Food Explorers - #1 Zurich Foodies Community',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city.'
        );

@endphp

@section('main')
@guest
  <p>{{ auth()->check() }}</p>
@else
<p>{{ auth()->user()->first_name }}</p>
<form action="/logout" method="post">
    <button>LOGOUT</button>@csrf
</form>
@endguest
@endsection
