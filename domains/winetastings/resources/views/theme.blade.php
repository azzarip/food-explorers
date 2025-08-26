@extends('azzarip::menu')


@section('big-menu')
    <ul class="flex items-center justify-start mt-3 mb-1 mr-3 text-xl font-bold align-bottom space-x-9">
        <li>
            <a href="/"
                class="py-2 font-medium rounded-full hover:bg-rose-500/30 px-4">Home</a>
        </li>
        <li>
            <a href="/upcoming"
                class="py-2 font-medium rounded-full hover:bg-rose-500/30 px-4">Upcoming Tastings</a>
        </li>  

    </ul>
@endsection

@section('small-menu')
<ul class="text-black">
        <li class="p-3 text-xl border-y group hover:bg-slate-200">
            <a href="/"
                class="block w-full h-full {{ request()->path() === '/' ? 'font-semibold' : '' }}">Homepage
            </a>
        </li>
        <li class="p-3 text-xl border-y group hover:bg-slate-200">
            <a href="/upcoming"
                class="block w-full h-full {{ request()->path() === '/upcoming' ? 'font-semibold' : '' }}">Upcoming Tastings
            </a>
        </li>

</ul>
@endsection

@section('footer')
<x-footer :email=false />
@endsection