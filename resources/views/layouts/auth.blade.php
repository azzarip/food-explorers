@extends('azzarip::layouts.1col', ['bg' => 'bg-background'])

@section('main')
<div class="flex justify-center">
<div class="w-full max-w-3xl my-2 bg-white border-green-600 lg:my-8 border-y-8 rounded-xl">
    <div class="max-w-lg px-4 mx-auto mt-2">
        @yield('content')
    </div>
</div>
</div>
@endsection
