@extends('azzarip::layouts.1col', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Zurich Foodie Gems',
        description: 'Feel overwhelmed by the number of restaurants in Zurich? Discover this handpicked selection of the best foodie gems in town, from cozy cafes to gourmet dining experiences. Your ultimate guide to Zurich\'s culinary delights.',
        image: '',
    );
@endphp

@section('main')
    <p>Hi</p>
@endsection
