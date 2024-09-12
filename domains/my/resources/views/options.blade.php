@extends('azzarip::layouts.1col')

@section('main')
<div class="w-1/2 m-4 border rounded-lg">
    <p>Languages: </p>
    <x-forms::base action="{{ route('set-language') }}" button="save">
    @error('invalid_language')
        <p class="error-msg">{{ $message }}</p>
    @enderror
    <label>
        <input type="checkbox" name="en" value="true" @checked(auth()->user()->speaks('en'))>
        EN
    </label>

    <label>
        <input type="checkbox" name="de" value="true" @checked(auth()->user()->speaks('de'))>
        DE
    </label>
    </x-forms::base>
</div>
@endsection
