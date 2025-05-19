@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Petit Paris - Food Explorers',
        description: 'Petit Paris. An Adventure through Parisian Bistrots.  From 3. October to 5. October 2025. Places are limited, book now.',
        image: image('petit-paris.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto">
        <div class="max-lg:px-2 mt-2">
            <h1><img src="@image('petit-paris-logo.webp')" alt="Petit Paris Title" class="w-full lg:max-w-lg mx-auto mb-2"></h1>
            <img src="@image('petit-paris.webp')" alt="Petit Paris" class="rounded-lg shadow-md w-3/4 lg:max-w-2xl mx-auto">
            <p class="font-serif text-2xl lg:text-3xl  font-semibold text-center rounded-lg m-2 lg:pt-4 ">An Adventure Through
                Parisian Bistrots
            </p>
            <p class="font-serif text-center mt-4 font-semibold text-amber-800 text-xl lg:text-2xl">Friday 3. - Sunday 5.
                October 2025</p>
        </div>

        <div class="space-y-4 mt-4">
            <x-button link="https://drive.google.com/file/d/1Cy43KUDvt3DFsfQ0HrE0pJmTl1w7E-k9/view?usp=drive_link" >Download Program as PDF</x-button>
            {{-- <x-button link="/petit-paris/program" >View Full Program Online</x-button> --}}
        </div>
        <p class="text-center font-bold text-4xl lg:text-5xl py-4">BOOKINGS OPEN IN</p>
  <div id="countdown" class="text-4xl lg:text-5xl mt-4 font-bold text-center mb-12"> Loading...</div>



    </article>
@endsection 

@push('scripts')
    <script>
    const targetDate = new Date("2025-05-24T10:00:00Z");

  function pad(n) {
      return n < 10 ? '0' + n : n;
    }

    function updateCountdown() {
      const now = new Date();
      let secondsRemaining = Math.floor((targetDate - now) / 1000);

      const countdownElement = document.getElementById("countdown");

      if (secondsRemaining <= 0) {
        countdownElement.textContent = "00:00:00";
        clearInterval(timer);
        return;
      }

      const hours = Math.floor(secondsRemaining / 3600);
      secondsRemaining %= 3600;
      const minutes = Math.floor(secondsRemaining / 60);
      const seconds = secondsRemaining % 60;

      countdownElement.textContent = `${pad(hours)}:${pad(minutes)}:${pad(seconds)}`;
    }

    updateCountdown(); // Initial call
    const timer = setInterval(updateCountdown, 1000); // Update every second
  </script>
@endpush