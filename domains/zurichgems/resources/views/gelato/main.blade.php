@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/20', 'nav' => false])

@php
    $seo = new SEO(
        title: 'The Best Gelato of Zurich - Zurich Gems',
        description: 'After trying more than 50 gelaterias in the city of Zurich, I choose the top 3 and bottom 3 of my list. Here are the best ice cream shops in town, you cannot miss in this warm summer 2025.',
        image: '' //image('gelato/girl.webp')
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto mt-4 px-2 mb-12">
        <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl text-center font-bold leading-relaxed lg:leading-relaxed">
            The Best Gelato of Zurich
        </h1>
        <p class="font-head text-2xl lg:text-3xl mt-2 mb-4 text-slate-700 leading-relaxed lg:leading-relaxed">
            I went on a mission to try every gelato spot in Zurich: I discovered some hidden gems, others were really nice,
            others completely disappointing.
            Here’s the "full scoop" for all the Zurich ice cream lovers.</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 mb-4">
            <div class="w-fit flex gap-2 py-1 text-lg items-center">
                <div>
                    <p class="font-serif font-semibold"> <span class="font-normal">by</span> Marco Azzari
                        <x-heroicon-s-check-badge class="inline w-4 h-4 mb-1 text-cyan-600" />
                    </p>
                    <p class="italic -mt-1">Zurich Food Explorer </p>
                </div>
            </div>
            <p class="italic text-right">published on: <time datetime="2025-07-12">July 12, 2025</time></p>
        </div>

        <div class="space-y-3">
            <h2 class="font-bold text-3xl lg:text-4xl text-center"> I Tried All Gelaterias of Zurich: Here are my top 3!</h2>
            <p>Let's start with the <strong>Top 3 Gelaterias of Zurich</strong>, not in any particular order.</p>


            <h3 class="font-serif text-2xl lg:text-3xl">Raffael's Bistro</h3>
            <p>Raffael's is quite known for their pastry and chocolate, less for the ice cream. Still their products are
                really amazing on the Zurich panorama. An absolute must try.</p>
            <img src="https://i.shgcdn.com/8b1dffb2-b234-4c6d-97ac-081638f0eeb9/-/format/auto/-/preview/3000x3000/-/quality/lighter/"
                alt="Raffael's Gelato" class="mx-auto rounded shadow lg:w-full">
            <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/gYHi9fZ5joEMdHHy6"
                    rel="nofollow noreferrer">Torgasse 3, 8001 Zürich <span class="whitespace-no-wrap">(<span
                            class="font-semibold">Maps</span>)</span> </a> </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 5.- per Scoop</p>

            <p><span class="font-semibold">Taste:</span> 3/3 Incredible flavor, each single one shines through clearly. Not
                overly sweet, with distinct balanced aromas. Smooth, powerful, and perfectly balanced on the palate.</p>
            <p><span class="font-semibold">Structure:</span> 3/3 Deliciously smooth and velvety, it melts effortlessly in
                your mouth. Soft, airy, yet keeps it shape while you eat it.</p>
            <p><span class="font-semibold">Presentation:</span> 3/3 Beautifully served with a spatula instead of scooping,
                giving it an artisanal touch I'm looking for. Comes with a crisp and crunchy waffle.</p>
            <p><span class="font-semibold pb-4">Experience:</span> 3/3 Cozy and welcoming shop where you can select your
                preferred taste. Nice variety, but not too much choice including fruit options. The ice cream is freshly
                served straight from the
                barrel of the Machine. You can have it as take away, or sit down in the store, inside or in the patio
                outside. </p>

            <h3 class="font-serif text-2xl lg:text-3xl">La Serenata Gelato</h3>
            <p>Just recently opened in spring 2024, La Serenata is already an enstablished gelateria in Zurich, bringing the
                italian style in Zurich. Everything tastes homemade, with a lot of new flavors to discover.</p>
            <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqebrmyN_NxgPnPQldFUVHRzarq50eZjuBeOV-yRIuX0Ci5yj9itGpEB_FjlnULdAQz6YU9gQ6stb4okxqGwwKMKL-eYIqra4FGI0yarMlYoGfc54GoTTo6ZzWu0LhedvlvZ9qB=s680-w680-h510-rw"
                alt="La Serenata Gelateria" class="mx-auto block rounded shadow lg:w-full">
            <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/U3VvD4vM5jjiXEFZ7"
                    rel="nofollow noreferrer">Birmensdorferstrasse 118, 8003 Zürich <span class="whitespace-no-wrap">(<span
                            class="font-semibold">Maps</span>)</span> </a> </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 x 1 flavor, 7.50 x 2 flavors</p>
            <p><span class="font-semibold">Taste:</span> 3+/3 Rich, authentic Italian-style, I particularly love the flavor
                combination that are just the usual "chocolate" and "pistachio". All the flavors are a taste worth trying,
                each with a unique intensity. </p>
            <p><span class="font-semibold">Texture:</span> 3/3 Really really creamy and smooth, really fine and well done
                gelato.</p>
            <p><span class="font-semibold">Presentation:</span> 3/3 Big and abundant gelato, one of the few spots that use
                the spatula instead of the scooper.</p>
            <p><span class="font-semibold pb-4">Experience:</span> 3/3 A warm, authentic ambiance with friendly service, you
                can sit inside or outside on the benches. The shop is full of different desserts and cakes.</p>

            <h3 class="font-serif text-2xl lg:text-3xl">Rosso Arancio</h3>
            <p>One of the most famous gelaterias near Stauffacherplatz. Huge ice cream, pure italian style, nice flavors and
                really great staff.</p>
            <img src="https://cotedazurich.ch/wp-content/uploads/2023/01/Rosso-Arancio-Sorten.jpg"
                alt="Rosso Arancio Gelateria" class="mx-auto rounded shadow lg:w-full">
            <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/621KkMixKwdRygFo8"
                    rel="nofollow noreferrer">Stauffacherstrasse 37, 8004 Zürich <span class="whitespace-no-wrap">(<span
                            class="font-semibold">Maps</span>)</span> </a> </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 small size, 7.50 medium size</p>
            <p><span class="font-semibold">Taste:</span> 3+/3 The richest and most delightful gelato of Zurich. Like the
                typical italian ice cream. I really love their pistachio. </p>
            <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth with a rich, full texture that
                fills your mouth. Really satisfying to eat.</p>
            <p><span class="font-semibold">Presentation:</span> 3/3 They use the spatula and not the scoop, crunchy
                cone, big and full cone.</p>
            <p><span class="font-semibold pb-4">Experience:</span> 3/3 Nice shop near stauffaucher, you can see easily all
                the
                flavors exposed, a good range of choice without being overwhelming and not only the standard choices.</p>

            <h2 class="font-bold text-2xl lg:text-3xl text-center">Another special one</h2>

            <h3 class="font-serif text-2xl lg:text-3xl">Eisvogel Zentrale für Gutes</h3>
            <p>It is not really a gelateria, but more a "quartier shop" where you can taste just few flavors daily made by
                the owner. Really amazing flavors and combinations, I would suggest to try it once, but do not expect the
                vast choice of any other gelateria.</p>
            <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4npvjqHHRFqAVf6jXyl2m_oGJ6uUQuVMRRUr9BJ5Kf-5ndPXfRJVHKV0KP8fUJAwdocj2DR0SBIJaRsza7OAuIk-zLqJ8M4oY_XjFS01XRUasJalcubq1O3qYCsiby_YVCtRrvzNhA=s680-w680-h510-rw"
                alt="Eisvogel Shop" class="mx-auto rounded shadow lg:w-full">
            <p><span class="font-semibold">Address:</span> Ottostrasse 15, 8005 Zürich ( <a
                    href="https://maps.app.goo.gl/ke1psKkqRKmsDUtC7" class="inline-link">Maps</a> ) </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 x 2 flavors, 7.50 x 3 flavors </p>
            <p><span class="font-semibold">Taste:</span> 3+/3 A unique combination of flavors, each one shining through
                clearly. With few options available, it stands out for its distinct, well-balanced aromas—rich, powerful,
                and perfectly harmonious on the palate.
            </p>
            <p><span class="font-semibold">Texture:</span> 3/3 Smooth and velvety, freshly produced, soft and with the right
                texture.</p>
            <p><span class="font-semibold">Presentation:</span> 2/3 Nice and crispy cone, the ice cream is scooped. Good
                portions for the price</p>
            <p><span class="font-semibold pb-4">Experience:</span> 2/3 Cozy neighborhood shop, a warm atmosphere and
                personal touch, the shop is really small, and they have only a few tastes to try.</p>



            <h2 class="font-bold text-2xl lg:text-3xl text-center">The worst 3 Gelaterias</h2>
            <p>Everybody loves a bit of roasting, so here are 3 Gelaterias to avoid.</p>

            <h3 class="font-serif text-2xl lg:text-3xl">Confiseur Bachmann</h3>
            <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/QUZoryPm4BQRszki7"
                    rel="nofollow noreferrer">Bahnhofstrasse 89, 8001 Zürich
                    Zürich <span class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
            <p><span class="font-semibold">Taste:</span> 1/3 Simple flavors, made witfh cheap artificial flavors.
            </p>
            <p><span class="font-semibold">Texture:</span> 1/3 Really bad texture, too soft and airy and gummy.</p>
            <p><span class="font-semibold">Presentation:</span> 2/3 Standard cone of Zurich, ice cream scooped into the
                cone.</p>
            <p><span class="font-semibold">Experience:</span> 0/3 Most unpolite and horrible person behind the counter,
                nice shop on the other side.</p>

            <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Adea</h3>
            <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/yDUxhLQhqszsC1jv7"
                    rel="nofollow noreferrer">Theaterstrasse 10, 8001 Zürich
                    Zürich <span class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
            <p class="pb-4"><span class="font-semibold">Price:</span> 4.- Per Scoop.</p>

            <p><span class="font-semibold">Taste:</span> 0/3 Full of Artificial Aromas, you cannot distinguish the
                flavors if not for the colors.</p>
            <p><span class="font-semibold">Texture:</span> 1/3 Nothing impressive, melts in the mouth, without freezing
                your brain.</p>
            <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                "<em>spatulated</em>", still the cone is nice and big, but not so large that you need a spoon to eat it.</p>
            <p><span class="font-semibold pb-4">Experience:</span> 1/3 Ok. You just buy from the window, but at least you
                can see the different Gelato flavors. </p>

            <h3 class="font-serif text-2xl lg:text-3xl">Dieci</h3>
            <div>
                <p><span class="font-semibold">Address:</span></p>
                <p><a href="https://maps.app.goo.gl/iQyjdBN7qDTVLYJu8" rel="nofollow noreferrer">Niederdorfstrasse 40, 8001
                        Zürich <span class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>

                <p><a href="https://maps.app.goo.gl/3nWrV3SZxq9pvzac6" rel="nofollow noreferrer">Limmatquai 32, 8001
                        Zürich
                        <span class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
            </div>
            <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 x 1 flavor, 7.50 x 2 flavors</p>
            <p><span class="font-semibold">Taste:</span> 0/3 The ice cream just tastes of sugars and flavorings. The worst
                ice cream of Zurich. </p>
            <p><span class="font-semibold">Texture:</span> 1/3 Really icy cone, it was difficult to eat as it was
                completely frozen.</p>
            <p><span class="font-semibold">Presentation:</span> 0/3 The cone is the cheapest waffle of Zurich, not good at
                all, the ice cream simply scooped into it.</p>
            <p><span class="font-semibold">Experience:</span> 0/3 You have on the street, grab your cone and go away.</p>

            <div class="space-y-3">
                <h2 class="font-bold text-2xl lg:text-3xl">What About All the Others?</h2>
                <p>You can find all the gelaterias I tried marked on the map below:</p>
                <iframe src="https://www.google.com/maps/d/embed?mid=1ac4pxfb-Kn2sgMpqreyQIn13R37uA4o&hl=en&ehbc=2E312F"
                    class="mx-auto min-h-[480px] w-full"></iframe>
                <p>In the map there are 50 ice cream shops, I tried them all, and you can read a specific review for each of
                    them (<a href="/gelato/reviews" class="inline-link">read it here</a>).</p>
                <p>At the top of this page you found my top 3, but there are many more worth trying.</p>
                <p>There I classified all of them in three groups: must try, nice to try, forgettable.</p>

                <h3 class="font-semibold text-xl lg:text-2xl">
                    Where is Gelateria di Berna?</h3>
                <p>Gelateria di Berna, is <strong>the</strong> Gelateria of Zurich, full stop.</p>
                <p>Everybody has tried their gelato, somebody loves it somebody hates it.</p>
                <p>I personally like them a lot, especially because they don't use the scoop (more on this later).</p>
                <p>Year after year they keep increasing the quality and the choice of flavors.</p>
                <p>They popularized "Mare di Berna", the old italian "pinguino" taste, vanilla ice cream with chocolate
                    ganache on top .</p>
                <p>Should belong to this top? Probably. But I preferred giving space to less known gelaterias.</p>
                <p>There are many more gelaterias in Zurich. <strong>Some are good, some are not.</strong></p>
                <p>If your favorite is missing, I understand. The list is ranked based on my personal evaluation.
                <p> <strong>You can find all my ratings <a href="/gelato/reviews" class="inline-link">by
                            clicking this link</a>.</strong></p>
                <p>Did I miss one? Possibly. Feel free to write me an email, and I’ll try to check it out.</p>

                <h3 class="font-bold text-2xl lg:text-3xl">How Did I Choose the Gelaterias?</h3>
                <p>These are the <strong>criteria I used</strong> to decide which places qualified for this list:</p>
                <ul class="list-disc list-inside space-y-3">
                    <li>I only included gelaterias that <strong>serve cones of ice cream within the city of Zurich.</strong>
                    </li>
                    <li>If a place offers only cups or plated desserts, such as restaurants or pastry shops, I excluded
                        them.</li>
                    <li><strong>Ice cream must be served by a human employee</strong> and portioned fresh at the counter.
                        Therefore:</li>
                    <li>Shops selling only prepackaged ice cream (Frisco, Nestlé, Mövenpick, etc.) were not considered.</li>
                    <li>Shop selling soft serve ice cream, just extruded from the machines, were not considered.</li>
                </ul>

                <div class="space-y-3 mt-8">
                    <h2 class="font-bold text-2xl lg:text-3xl">How Did I Grade the Ice Cream?</h2>
                    <p><strong>Ice cream is not wine.</strong> It doesn’t have that level of complexity.</p>
                    <p>Still, when it’s done well, it brings real joy. When it’s done poorly, it results in brain freeze and
                        endless thirst.</p>
                    <p>To evaluate fairly, I created a <strong>4-pillar system</strong> that reflects the process of making
                        and serving gelato.</p>
                    <p>In short, making gelato involves:</p>
                    <ol class="list-inside list-decimal space-y-3 pl-4">
                        <li>Creating a flavored base.</li>
                        <li>Churning and freezing it into gelato.</li>
                        <li>Serving it in a cone to the customer.</li>
                    </ol>
                    <p>Each of the first three steps corresponds to a specific pillar:</p>
                    <ol class="list-decimal list-inside space-y-3 pl-4">
                        <li><strong>Taste</strong></li>
                        <li><strong>Texture</strong></li>
                        <li><strong>Presentation</strong></li>
                    </ol>
                    <p><strong>Taste</strong> reflects the quality of the base. <strong>Texture</strong> shows how well it
                        was transformed into smooth gelato. <strong>Presentation</strong> evaluates how it’s served in the
                        cone.</p>
                    <p>But the experience doesn’t end there.</p>
                    <p>It also matters what happens around the product. <strong>How the shop feels, how friendly the staff
                            is, and how easy it is to order.</strong></p>
                    <p>That’s the fourth pillar: <strong>Experience</strong>.</p>
                    <p>Each pillar receives a score from <strong>0 to 3</strong>.</p>
                    <p>You can view all scores <a href="/gelato/reviews" class="inline-link">here</a>.</p>
                    <p><strong>Each pillar is judged independently.</strong> A gelato can have great texture but poor
                        flavor. Or a great product served by a soulless staff through a window.</p>
                    <p>That’s why I chose not to sum up all scores into one total. <strong>It wouldn't reflect the reality
                            of the experience.</strong></p>
                    <p>Ice cream is something we eat mainly for taste.</p>
                    <p> A good ice cream in a horrible shop served by a grumpy waiter, it is still much much better than the
                        opposite.</p>
                    <p>If you need a single number to classify a gelateria, look mainly at that.</p>
                </div>

                <h2 class="font-bold text-3xl lg:text-4xl pt-2">One Final Consideration on Zurich Gelaterias</h2>
                <p>After tasting so much gelato, a few thoughts came to mind that I’d like to share.</p>

                <h3 class="font-semibold font-serif text-2xl lg:text-3xl">Too Shiny Colors</h3>
                <p>I’ve noticed that <strong>many ice cream shops use extremely shiny and artificial-looking colors</strong>
                    in their displays.</p>
                <p>I’m not here to analyze ingredient lists or break down the chemistry of each flavor.</p>
                <p>But even just by looking, something becomes clear: <strong>some colors are simply too shiny to be
                        natural</strong>.</p>
                <p>Bright green pistachio, fluorescent pink strawberry, and even blue ice cream — <strong>do we really need
                        blue ice cream?</strong></p>
                <p>These colors don’t reflect nature. Real pistachio varies by origin: green in Bronte (Sicily), more yellow
                    or brown in Turkey.</p>
                <p>Strawberry is a soft red, <strong>not neon pink</strong>.</p>
                <p>For many customers, brighter colors probably look more appealing. But that doesn’t mean it’s good gelato.
                </p>
                <p><strong>The world doesn’t need another artificial-looking flavor</strong> just to catch the eye.</p>

                <h3 class="font-semibold font-serif text-2xl lg:text-3xl">Death to the Scoop!</h3>
                <p>Almost all gelaterias in Zurich <strong>serve ice cream using a scooper</strong>.</p>
                <p>I’m not saying that’s completely wrong — but <strong>it’s not how gelato should be served</strong>.</p>
                <p>Professional gelatieri use a spatula, adjusting their technique depending on the creaminess of each
                    flavor.</p>
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/57/45/9b/l-arte-di-porzionare.jpg"
                    alt="Spatula Ice Cream" class="rounded shadow">
                <p><strong>Gelato should be gently layered onto the cone</strong>, not compressed into a ball.</p>
                <p>Yes, scooping is quicker. You can train someone in minutes and it requires no real skill.</p>
                <p>But that’s exactly the issue: <strong>serving gelato is part of the craft</strong>. And that includes how
                    it’s portioned.</p>
                <p>If your focus is speed and simplicity, <strong>you’re not serving true gelato</strong> — just cold
                    dessert.</p>
                <p>Scooping compresses the product, <strong>damaging the texture and mouthfeel</strong>.</p>
                <p>Gelato is not ice cream. It’s softer, with less air, and more delicate ice crystal structure.
                    <strong>That’s what gives it its smoothness</strong>.</p>
                <p><strong>Making great gelato doesn’t stop in the kitchen</strong>. The people serving it are part of the
                    experience too.</p>
                <p>This is why I talk often about the Zurich Standard Cone: ice cream simply scooped into the cone.</p>
                <p>The death of ice cream and good service.</p>

                <h3 class="font-semibold font-serif text-2xl lg:text-3xl">Too Boring Flavors</h3>
                <p>This might be the most frustrating observation of all.</p>
                <p>Nearly every gelateria offers the same basic lineup:</p>
                <p><strong>Chocolate, pistachio, hazelnut, strawberry, lemon, mango.</strong></p>
                <p>That’s it.</p>
                <p>I get it — these flavors are safe, and they sell. But <strong>there’s no creativity, no
                        personality</strong>.</p>
                <p>Anyone can do this. It makes me wonder if everyone’s just ordering from the same industrial supplier.</p>
                <p class="font-semibold"><strong>Come on, Gelatieri!</strong></p>
                <p>The great masters of gelato aren’t known just for quality — they’re known for their imagination and
                    <strong>their unique flavor combinations</strong>.</p>
                <p>To be clear: I’m not asking for caramelized onion or unicorn tears.</p>
                <p>But please, <strong>go beyond the basics</strong>. Surprise us.</p>

                <h2 class="font-bold text-3xl lg:text-4xl pt-2">A Dream of Ice Cream</h2>
                <p>In recent years, <strong>Zurich’s ice cream scene has started to grow and evolve</strong>.</p>
                <p>More and more gelato shops are opening. Not all are excellent, but <strong>many show clear
                        improvement</strong> compared to just a few years ago.</p>
                <p>There’s more attention to ingredients, texture, and technique. Some newcomers are clearly trained — and
                    it shows in both the product and the experience.</p>
                <p><strong>The average quality has gone up. That’s a fact.</strong></p>
                <p>We’re still far from cities like Milan or Bologna, but <strong>Zurich is catching up</strong> — slowly
                    but surely.</p>
                <p>Yes, there’s still too much average product, and some shops feel stuck in the past. But <strong>the trend
                        is encouraging</strong>.</p>
                <p>If this momentum continues, <strong>Zurich could become a real gelato city</strong>.</p>
                <p>We’re not there yet.</p>
                <p>But <strong>for the first time, it feels possible</strong>.</p>
                <p class="text-right font-serif">Marco</p>
            </div>
    </article>
@endsection

@push('head')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://www.zurichgems.test/gelato#webpage",
      "url": "https://www.zurichgems.test/gelato",
      "name": "The Best Gelato of Zurich - Zurich Gems",
      "isPartOf": {
        "@id": "https://www.zurichgems.test/#website"
      },
      "about": {
        "@id": "https://www.zurichgems.test/#organization"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "@id": "https://www.zurichgems.test/gelato#primaryimage",
        "url": "https://www.zurichgems.test/images/gelato-og.jpg"
      },
      "description": "After trying more than 50 gelaterias in the city of Zurich, I choose the top 3 and bottom 3 of my list. Here are the best ice cream shops in town, you cannot miss in this warm summer 2025.",
      "datePublished": "2025-06-01",
      "dateModified": "2025-09-18",
      "inLanguage": "en-CH",
      "publisher": {
        "@id": "https://www.zurichgems.test/#organization"
      }
    },
    {
      "@type": "Article",
      "@id": "https://www.zurichgems.test/gelato#article",
      "headline": "The Best Gelato of Zurich",
      "alternativeHeadline": "Top 3 and Bottom 3 Gelaterias After Visiting 50+ Shops",
      "description": "After trying more than 50 gelaterias in Zurich, Marco Azzari reveals the top 3 and bottom 3 ice cream shops you must know for summer 2025.",
      "image": {
        "@id": "https://www.zurichgems.test/gelato#primaryimage"
      },
      "author": {
        "@id": "https://www.zurichgems.test/#person"
      },
      "publisher": {
        "@id": "https://www.zurichgems.test/#organization"
      },
      "mainEntityOfPage": {
        "@id": "https://www.zurichgems.test/gelato#webpage"
      },
      "datePublished": "2025-06-01",
      "dateModified": "2025-09-18",
      "inLanguage": "en-CH"
    }
  ]
}
</script>
@endpush