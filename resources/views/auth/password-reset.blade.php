@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Update Password'
    );
    $seo->markAsNoIndex();
@endphp

@section('content')
<div class="pt-4 pb-8 lg:pt-10">
   <x-teavel::auth.password-reset />
</div>
@endsection
