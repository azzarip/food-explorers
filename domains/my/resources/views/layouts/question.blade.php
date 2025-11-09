@extends('azzarip::layouts.base', ['bg' => 'bg-gray-900', 'nav' => false ])

@section('body')
@yield('question')
<p class="mt-4 text-center text-slate-400">(@lang('You can change your settings anytime in the profile menu'))</p>
@endsection
