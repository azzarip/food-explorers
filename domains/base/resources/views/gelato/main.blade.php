@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'I tried ALL the Gelaterias of Zurich: Here is what I found',
        description: 'After trying more than 30 gelaterias in the city center of Zurich, I choose the top 3 and bottom 3 of my list. Here are the best ice cream shops in town.',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto mt-4 px-2 mb-12">
        <h1 class="font-serif text-4xl lg:text-5xl text-center font-bold leading-relaxed lg:leading-relaxed">
            I tried ALL the Gelaterias of Zurich: Here is what I found
        </h1>
        <p class="font-head text-2xl lg:text-3xl mt-2 mb-12 text-stone-800">After tasting all the gelaterias of Zurich, I
            ranked them all and here are my favourites</p>

        <div class="space-y-3">
            <h2 class="font-bold text-2xl lg:text-3xl">Top 3 Gelaterias</h2>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Vittorio Vanini</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CRZJ2ksTwuUJ7HH9A"
                        rel="nofollow noreferrer">Limmatquai 74, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop, Gourmet Gelato 12.-</p>

                <img src="@image('gelato/vittorio_vanini.webp')" alt="Gelato Vittorio Vanini"  class="mx-auto rounded shadow lg:w-full">
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors, rich and intense.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth, amazing texture.</p>
                <p><span class="font-semibold">Presentation:</span> 3+/3 The most beautiful gelato of Zurich, especially if
                    you try the Gourmet one. The waitress correctly prepared the ice cream with a spatula and not by
                    scooping it. Really crispy waffles for the cone.</p>
                <p><span class="font-semibold">Experience:</span>3/3 Beautiful shop on the Limmatquai, the various flavors
                    are not exposed by you have a really clear menu on the wall and some premade combinations that make it
                    easier to choose.</p>
            </div>


            <h3 class="font-serif text-2xl lg:text-3xl">Raffael's</h3>
            <p><span class="font-semibold">Address:</span> Torgasse 3, 8001 Zürich ( <a
                    href="https://maps.app.goo.gl/gYHi9fZ5joEMdHHy6" class="inlie-link">Maps</a> ) </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 5.- per Scoop</p>

            <p><span class="font-semibold">Taste:</span> 3/3 Incredible flavor, each single one shines through clearly. Not
                overly sweet, with distinct balanced aromas. Rich, powerful, and perfectly balanced on the palate.</p>
            <p><span class="font-semibold">Structure:</span> 3/3 Luxuriously smooth and velvety, it melts effortlessly in
                your mouth. Soft, airy, yet keeps it shape while you eat itt.</p>
            <p><span class="font-semibold">Presentation:</span> 3/3 Beautifully served with a spatula instead of scooping,
                giving it an artisanal touch I'm looking for. Comes with a crisp, golden waffle.</p>
            <p><span class="font-semibold">Experience:</span> 3/3 Cozy and welcoming shop where you can select your
                preferred taste. Nice variety, including fruit options. The ice cream is freshly served straight from the
                barrel of the Machine. </p>
            <h2 class="font-bold text-2xl lg:text-3xl">Worse 3 Gelaterias</h2>

            <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Adea</h3>
            <p><span class="font-semibold">Address:</span> Theaterstrasse 10, Bellevue, 8001 Zurich </p>
            <p class="pb-4"><span class="font-semibold">Price:</span>4.- Per Scoop.</p>

            <p><span class="font-semibold">Taste:</span> 0/3 Full of Artificial Aromas, you cannot distinguish the
                flavors if not for the colors.</p>
            <p><span class="font-semibold">Texture:</span> 3/3 Nice and smooth ice cream, served at the right
                temperature. Melts in the mouth, without freezing your brain.</p>
            <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
            "<em>spatulated</em>", still the cone is nice and big, but not so large that you need a spoon to eat it.</p>
            <p><span class="font-semibold">Experience:</span> 2/3 Ok. You just buy from the window, but at least you can
            see the different Gelato flavors. </p>
        </div>

        <div class="space-y-3">
            <h2 class="font-bold text-2xl lg:text-3xl">Here is all the gelaterias I tried:</h2>
            <p>You can find in this map all the gelaterias in </p>
            <iframe src="https://www.google.com/maps/d/embed?mid=1ac4pxfb-Kn2sgMpqreyQIn13R37uA4o&hl=en&ehbc=2E312F"
                width="640" height="480" class="mx-auto my-4"></iframe>
            <p>Here is the <a href="/all-gelaterias-of-zurich-ranked" class="inline-link">list of all gelaterias of Zurich</a>.</p>
            <p>The list is ranked with my personal vote for each of them.</p>

            <h3 class="font-bold text-2xl lg:text-3xl">How did I choose the gelaterias?</h3>
            <p>These are my criterias for considering a Gelateria into this list.</p>
            <ul class="list-disc list-inside space-y-3">
                <li>I only choose Gelaterias that serve cones of Ice Creams, in the city (political Gemeinde) of Zurich.
                </li>
                <li>If you cannot order a cone of Ice Cream and only cups or dishes (like Restaurants or Pastry shops) I did
                    not consider them in this list.</li>
                <li>If they serve only prepackaged Ice Cream (Frisco, Nestlé, etc.) I did not consider them.</ò>
                <li>Ice Cream must be served by a human employee and prepared on the spot.</li>
            </ul>
        </div>

        <div class="space-y-3 mt-8">
            <h2 class="font-bold text-2xl lg:text-3xl">How to analyze an ice cream?</h2>
            <p>Ice Cream is not wine, does not have that complexity.</p>
            <p>Still it is a dessert that brings joy and satisfaction if done correctly, or just brain freezes and need to
                drink water if done uncorrectly.</p>
            <p>I created a <strong>system of 4 pillars</strong> for tasting the Ice Cream.</p>
            <p>In brief, to make an ice cream you need to:</p>
            <ol class="list-inside list-decimal space-y-3 pl-4">
                <li>Make a solution with the given taste.</li>
                <li>Freeze and mix the solution into an iced cream.</li>
                <li>Serve the ice cream into a cone for the customer to enjoy.</li>
            </ol>
            <p>Each three of these steps gets a pillar:</p>
            <ol class="list-decimal list-inside space-y-3 pl-4">
                <li><strong>Taste</strong></li>
                <li><strong>Texture</strong></li>
                <li><strong>Presentation</strong></li>
            </ol>
            <p>But the Ice Cream experience does not end there.</p>
            <p>It is also important how the experience of buying the ice cream: how is the shop, how nice is the waiter, is
                it easy to buy and choose the ice cream?</p>
            <p>All of these information end in the 4th pillar: <strong>Experience</strong>. </p>
            <p>I gave a vote from 0/3 to 3/3 to each pillar.</p>
            <p>Following this link you will find <a href="/all-gelaterias-of-zurich-ranked" class="inline-link">all the gelaterias
                    of Zurich ranked</a> with this method.</p>
            <p>Each pillar is indipendent from each other, you can have a really good texture with horrible taste, or
                amazing taste served with an horrible experience in the shop.</p>
            <p>For this reason I did not sum up all the pillars vote into a final vote. It does not make sense. </p>

            <h2 class="font-bold text-3xl text-center lg:text-4xl">What Zurich Gelaterias are missing?</h2>
            <p>After having tasted so much Gelato, some thoughts came to my mind, that I would like to share.</p>
            <h3 class="font-semibold font-serif text-2xl lg:text-3xl">Too shiny colors!</h3>
            <p>I have noticed that many many ice cream shops, have a lot of shiny colors on their desk.</p>
            <p>I don't know the ingredient list and </p>
            <p>But comparing the colors, with the colors of the greatest Gelatieri of Italy, one thing can be noticed.</p>

            <p>Almost all gelaterias just scoop the ice cream.</p>
            <p>I won’t say that is wrong, but it’s not how it should be done.</p>
            <p>Professional gelatieri use a spatula to build the cone, adjusting technique depending on the creaminess of the selected flavors.</p>
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/57/45/9b/l-arte-di-porzionare.jpg" alt="Spatula Ice Cream" class="rounded shadow">
            <p>Gelato should be gently placed onto the cone, not simply compressed with a scooper.</p>
            <p>I know it feels easier to just scoop — you can train an employee in seconds and don’t need skilled labor to serve ice cream.</p>
            <p>But this is exactly the point: serving gelato is a skill.</p>
            <p>If you prefer lowering the quality of your gelato by just scooping portions quickly, then it’s not truly great gelato.</p>
            <p>A great gelato is one you can taste, one that isn’t full of ice crystals.</p>
            <p>Making great ice cream doesn’t end in the kitchen — those who serve it are part of the experience too.</p>

            <h3 class="font-semibold font-serif text-2xl lg:text-3xl">More courage</h3>
            <p>Of all the shops I visited, this is probably the one that frustrated me the most.</p>
            <p>All gelaterias basically offer the same flavors:</p>
            <p>Chocolate, Pistachio, Hazelnut, Strawberry, Lemon, Melon.</p>
            <p>Add a couple more, and that’s it.</p>
            <p>I understand it’s easy and probably sells well, but there’s no courage in doing this.</p>
            <p>Anyone can do it, and it makes me wonder if you’re all just buying from the same supplier.</p>
            <p class="font-semibold">Come on, Gelatieri!</p>
            <p>The world’s great Maestri are famous not only for their philosophy but also for their creativity and unique combinations.</p>
            <p>To be clear, I’m not expecting caramelized onion, Persian saffron, and tears of unicorns.</p>
            <p>But please, offer something beyond just chocolate and pistachio.</p>

        </div>
    </article>
@endsection
