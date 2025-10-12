@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Settle Petit Paris',
        robots: 'noindex, nofollow',
    );

    $contacts = \Azzarip\Teavel\Models\Tag::name('Petit Paris 2025')->contacts;
@endphp

@section('body')
<main>
  <section class="mx-auto max-w-md p-6 text-center">
  <header>
    <h1 class="text-3xl font-bold tracking-tight">Petit Paris</h1>
  </header>

<div 
    x-data="{
        selectedUuid: '',
        baseUrl: '/settle/petit-paris'
    }" 
    class="space-y-3 max-w-md"
>
    <label class="block text-lg font-medium text-gray-700">
        Select your name:
    </label>

    <select 
        x-model="selectedUuid"
        class="w-full rounded-lg border-gray-300 focus:ring-2 ring-1 focus:ring-green-500 focus:border-green-500"
    >
        <option value="" selected disabled>— Choose your name —</option>
        @foreach ($contacts as $contact)
            <option value="{{ $contact->uuid }}">{{ $contact->first_name }}</option>
        @endforeach
    </select>


    <button
        type="button"
        @click="if (selectedUuid) window.location = `${baseUrl}/${selectedUuid}`"
        :disabled="!selectedUuid"
        class="inline-flex items-center justify-center rounded-lg px-4 py-2 text-white transition"
        :class="selectedUuid ? 'bg-green-600 hover:bg-green-700' : 'bg-gray-300 cursor-not-allowed text-gray-600'"
    >
        Go
    </button>
    

    <p class="mt-8 text-sm text-slate-800">In case of any problems, don't hesitate to contact me!</p>
</div>
  </section>
</main>

@endsection