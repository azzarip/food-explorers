@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Reset Password Success',
    );
    $seo->markAsNoindex();

@endphp


@section('content')
<div class="my-4">
    <x-forms::password-.uccess />
</div>
@endsection
