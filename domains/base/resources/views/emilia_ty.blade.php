@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Emilia Adventure',
        robots: 'noindex, nofollow',
    );
@endphp

@section('body')
<main>
  <section class="mx-auto max-w-md p-6 text-center">
  <header>
    <h1 class="text-3xl font-bold tracking-tight">Thank You!</h1>
    <p class="mt-2 text-sm text-gray-500">Your spot for the <strong>Emilia Adventure</strong> is confirmed.</p>
  </header>

  <div class="mt-6 space-y-4 text-base leading-relaxed">
    <p>🍷 Great choice — you’re officially on the list!</p>
    <p>
      Don’t worry, it will take me about <strong>2–3 weeks</strong> to get back to you.
      During this time, I’ll organize all the details and prepare your options.
    </p>
    <p>
      Once I reach out, we’ll decide together <strong>which experience fits you best</strong>.
    </p>
  </div>

</section>
</main>

@endsection