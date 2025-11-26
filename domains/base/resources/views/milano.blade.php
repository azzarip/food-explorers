@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Marvelous Milano',
        description: 'Marvelous Milano, Food Explorers Adventure April 2026, from 17-19, with additional 16 of April 2026.',
        robots: 'noindex, nofollow',
    );
@endphp
@push('head')
    <script src="https://player.vimeo.com/api/player.js"></script>
@endpush

@section('body')
<main x-data>
<div class="bg-black w-full min-h-screen pb-4 pt-4 flex flex-col justify-around">
    <div>
        <p class="text-2xl lg:text-3xl text-center font-trajan text-white">Marvelous Milano</p>
        <h1 class="text-3xl lg:text-4xl text-center font-trajan text-amber-200">Watch the Trailer Now</h1>
    </div>
    <div class="mx-auto aspect-video w-full">
        <iframe
            src="https://player.vimeo.com/video/1140435831?badge=0&autopause=0&player_id=0&app_id=58479"
            class="w-full h-full"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture; encrypted-media;"
            referrerpolicy="strict-origin-when-cross-origin"
            title="Milano Trailer"
        ></iframe>
    </div>
    <a class="block mx-auto max-w-lg" href="#form">
        <x-button >Join the Priority List</x-button>
    </a>
</div>
<article class="max-w-3xl mx-auto">
    
    <div class="mt-12 space-y-4 px-2">
        <p class="font-serif text-3xl font-semibold">Dear Food Explorer,</p>
        <p>If you are reading these words, it means you care and like the events I have been organizing in the past years.</p>
        <p>If you are new or you have been here for many years, you know I take great care in giving the best experiences to my guests.</p>
        <p>And I have been cooking up this project for many months.</p>
        <p>Therefore let me get straight to point...</p>
        <p class="font-semibold text-xl font-serif">I am organizing a special weekend from Friday 17 to Sunday 19 April in Milano.</p>
        <p>During this weekend I will pick the best and most interesting food experiences of Milano.</p>
    </div>
     <section class="mt-10 space-y-4 leading-relaxed text-slate-100 bg-black py-4 px-8 rounded-xl">
                <h2 class="font-serif text-2xl font-semibold sm:text-3xl">Milano Is at the Heart of Italy’s Culinary Innovation</h2>
                <p>Most people think of Milano as a fast, cold, “business only” city. Fashion. Fairs. Design. Deadlines.</p>
                <p>But beneath this surface, there is a completely different Milano.</p>
                <p>
                    A city that isn’t just defined by its traditions —
                    <span class="font-semibold text-slate-50">it is defined by what it creates.</span>
                </p>
                <p>Milano does not seduce you with ancient monuments or perfect postcard pictures. It seduces you with something more contemporary, more alive, more delicious.</p>
                <p>Here, food is not simply prepared — it is designed, refined, and pushed forward. Chefs experiment, elevate ingredients, and shape where taste in Italy is going next.</p>
                <p class="border-l-2 border-yellow-500/60 pl-4 text-slate-200/90">
                    This is the Milano I want to show you: not the postcard, but the counter. Not the crowd, but the table. Not the usual, but the unforgettable.
                </p>
            </section>

            <!-- The weekend + Omakase -->
            <section class="mt-10 grid gap-8 lg:gap-10 px-2">
                <div class="space-y-4 leading-relaxed">
                    <h2 class="font-serif text-2xl font-semibold sm:text-3xl">A Small Group, a Big Discovery</h2>
                    <p>This is not a big tour. This is not a public event. This adventure is intentionally intimate.</p>
                    <p>For this edition of <span class="font-semibold">Marvelous Milano</span>, I am taking a very small group of Food Explorers with me.</p>
                    <ul class="mt-2 space-y-2 ">
                        <li class="flex gap-2">
                            <span>⭐</span>
                            <span>3 days in Milano, from Friday evening to Sunday.</span>
                        </li>
                        <li class="flex gap-2">
                            <span>⭐</span>
                            <span>A curated selection of restaurants and experiences that show how Milano is changing the culinary landscape of Italy.</span>
                        </li>
                        <li class="flex gap-2">
                            <span>⭐</span>
                            <span>An extremely intimate Omakase on the 16 of April, that many consider among the best in Europe.</span>
                        </li>
                    </ul>
                    <p>
                        Last year we went to Milano for the classics. This time, the line-up and the storyline are completely different. We’ll explore how the brightest chefs are rewriting what dining in Italy can be.
                    </p>
                    <p class="font-medium">
                        If you enjoyed the Omakase in Zürich, this is the “next level” — a counter with only a handful of seats, and six Food Explorers around it.
                    </p>
                </div>
                </section>
                    <!-- Priority list + cashback -->
            <section class="mt-12 space-y-6 rounded-3xl border bg-slate-900 p-6 sm:p-8 px-2">
                <div class="space-y-3">
                    <h2 class="font-serif text-2xl font-semibold sm:text-3xl text-white">This Page Is Not for Booking. It’s Only to Raise Your Hand.</h2>
                    <p class="text-slate-200">
                        The full program is still being refined. The final details will be shared first and exclusively with the people on this priority list.
                    </p>
                    <p class="text-slate-200">
                        By joining below, you are <span class="font-semibold text-slate-50">not</span> committing to anything. You are simply telling me:
                    </p>
                    <p class="rounded-xl border border-slate-700 bg-slate-250 px-4 py-3 italic text-slate-200">
                        “Marco, I’m interested. I want to see the complete program and have the first chance to secure one of the six seats.”
                    </p>
                </div>

                </section>
    <div class="max-w-md mx-auto pt-4 px-2 mt-8" id="form" >
        <h3 class="font-bold text-center text-2xl lg:text-3xl">Join the Priority List and claim your cashback</h3>
        <p class="my-1">To unlock it just fill the form down here:</p>
        <x-forms::base button="Join the Priority List">
                <x-forms::field.first_name />
                <x-forms::field.last_name />
                <x-forms::field.email />
                <x-forms::field.phone />
                <x-forms::field.privacy_policy />
        </x-forms::base>
    </div>
    <div class="space-y-4 max-w-xl px-2 mx-auto mt-8">
        <h3 class="font-bold text-center">No Stress · No Pressure · No Commitment</h3>
        <p>If you complete the form you’ll be the first to receive the program.</p>
        <p>You will simply receive the program before anyone else.</p>
        <p>Then, you can decide if you want to come or not.</p>
        <p>Otherwise, if you will not, nothing happens, no obligations.</p>
        <p><strong>Remember:</strong>we usually are sold out after a couple of days... I will send a whatsapp and a email, but if you want to come, don't wait too long.</p>
    </div>
    <div class="mt-12"></div>
</article>
</main>


@endsection