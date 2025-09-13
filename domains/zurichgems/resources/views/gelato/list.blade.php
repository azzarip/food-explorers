@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'All Gelaterias of Zurich [RANKED]',
        description: 'After trying more than 50 gelaterias in the city center of Zurich, I ranked them all in this list. Here are the winners and losers, divided into three categories: the must try, the nice to try and the forgettable.',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto px-2 mb-12 mt-2 lg:mt-4">
        <h1 class="font-head text-4xl lg:text-5xl text-center font-bold">
            All Gelaterias of Zurich [RANKED]
        </h1>
        <p class="text-xl lg:text-2xl text-center text-stone-700"></p>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 mb-4 mt-2">
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
        <hr class="mt-4 mb-8 ">
        <div class="space-y-3">
        <p>Here is all the Gelaterias in Zurich classified and reviewed. Here are all the categories:</p>
        <ul class="list-disc pl-6 list-inside text-xl space-y-2">
            <li class="inline-link"><a href="#must">The Must Try</a></li>
            <li class="inline-link"><a href="#nice">Nice to Try</a></li>
            <li class="inline-link"><a href="#forgettable">Forgettable</a></li>
        </ul>
        <p>The main article in which I explain how I graded and reviewed all the gelaterias can be found <a href="/top-3-gelaterias-zurich" class="inline-link">by clicking this link</a>.</p>
        <p>So let's start!</p>
        </div>
        <div class="space-y-4">
            <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-yellow-600" id="must">The Must Try
            </h2>

            <div class="space-y-2 border-b-2 py-2">
            <h3 class="font-serif text-2xl lg:text-3xl">Raffael's</h3>
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
            <p><span class="font-semibold">Experience:</span> 3/3 Cozy and welcoming shop where you can select your
                preferred taste. Nice variety,  but not too much choice including fruit options. The ice cream is freshly served straight from the
                barrel of the Machine. You can have it as take away, or sit down in the store, inside or in the patio outside.  </p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">La Serenata Gelato</h3>
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqebrmyN_NxgPnPQldFUVHRzarq50eZjuBeOV-yRIuX0Ci5yj9itGpEB_FjlnULdAQz6YU9gQ6stb4okxqGwwKMKL-eYIqra4FGI0yarMlYoGfc54GoTTo6ZzWu0LhedvlvZ9qB=s680-w680-h510-rw" alt="La Serenata Gelateria" class="mx-auto block rounded shadow lg:w-full">
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/U3VvD4vM5jjiXEFZ7"
                        rel="nofollow noreferrer">Birmensdorferstrasse 118, 8003 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 per 1 flavor, 7.50 per 2 flavors</p>
                <p><span class="font-semibold">Taste:</span> 3+/3 Rich, authentic Italian-style, I particularly love the flavor combination that are just the usual "chocolate" and "pistachio". All the flavors are a taste worth trying, each with a unique intensity. </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Really really creamy and smooth, really fine and well done gelato.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 Big and abundant gelato, one of the few spots that use the spatula instead of the scooper.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 A warm, authentic ambiance with friendly service, you can sit inside or outside on the benches. The shop is full of different desserts and cakes.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Rosso Arancio</h3>
                <p>One of the most famous gelaterias near Stauffacher platz. Huge ice cream, pure italian style, nice flavors and really great staff.</p>

                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/621KkMixKwdRygFo8"
                        rel="nofollow noreferrer">Stauffacherstrasse 37, 8004 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 small size, 7.50 medium size.</p>
                <p><span class="font-semibold">Taste:</span> 3+/3 The richest and most delightful gelato of Zurich. Like the typical italian ice cream. I really love their pistachio. </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth with a rich, full texture that
                    fills your mouth. Really satisfying to eat.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 They use the spatula and not the scoop, crunchy
                    cone, big and full cone.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Nice shop near stauffaucher, you can see easily all the
                    flavors exposed, a good range of choice without being overwhelming and not only the standard choices.</p>
            </div>

          <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Eisvogel Zentrale für Gutes</h3>
                <p><span class="font-semibold">Address:</span> Ottostrasse 15, 8005 Zürich ( <a
                        href="https://maps.app.goo.gl/ke1psKkqRKmsDUtC7" class="inline-link">Maps</a> ) </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 per 2 flavors, 7.50 per 3 flavors </p>
                <p><span class="font-semibold">Taste:</span> 3+/3 A unique combination of flavors, each one shining through clearly. With few options available, it stands out for its distinct, well-balanced aromas—rich, powerful, and perfectly harmonious on the palate.
                </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Smooth and velvety, freshly produced, soft and with the right texture.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice and crispy cone, the ice cream is scooped. Good portions for the price</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Cozy neighborhood shop, a warm atmosphere and personal touch, the shop is really small, and they have only a few tastes to try.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Vittorio Vanini</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CRZJ2ksTwuUJ7HH9A"
                        rel="nofollow noreferrer">Limmatquai 74, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop, Gourmet Gelato 12.-</p>

                <img src="@image('gelato/vittorio_vanini.webp')" alt="Gelato Vittorio Vanini" class="mx-auto rounded shadow lg:w-full">
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors, rich and intense.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth, amazing texture.</p>
                <p><span class="font-semibold">Presentation:</span> 3+/3 The most beautiful gelato of Zurich, especially if
                    you try the Gourmet one. The waitress correctly prepared the ice cream with a spatula and not by
                    scooping it. Really crispy waffles for the cone.</p>
                <p><span class="font-semibold">Experience:</span>3/3 Beautiful shop on the Limmatquai, not too much queue. I loved the premade combinations that make it
                    easier to choose the tastes you want. You can personalize the cone and get a shot of their melted chocolate with the cone.</p>
            </div>





<div class="space-y-2 border-b-2 pb-2" id="gelateria-di-berna">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Di Berna</h3>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.70 Medium Portion, 5.50 Big Portion</p>

                <p><span class="font-semibold">Taste:</span> 3/3 Nice selection of tastes, they are getting better year
                    after year. The Mare di Berna is one of their "top picks", I really like that they continue experimenting with new ideas.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Nice cone, well done. The ice cream is smooth a well done. </p>
                <p><span class="font-semibold">Presentation:</span> 3/3 The ice cream is well presented, they use the spatula to serve it, nice portions for their price. </p>
                <h4 class="font-bold">Brupbacherplatz</h4>
                    <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/GJ76azcY3rDTqqiV8"
                    rel="nofollow noreferrer">Weststrasse 196, 8003 Zürich <span class="whitespace-no-wrap">(<span
                        class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Their most famous shop, but the queue is really too
                    long.
                    They have the menu online so you can prepare, but it is still a bit boring to go there.</p>
                
                <h4 class="font-bold">Zollhaus</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/JvMZD3tXfkteAU8r9"
                    rel="nofollow noreferrer">Zollstrasse 117, 8005 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 3/3 Much prettier shop with a lot of open space, much less
                    queue for the same tastes and prices. Nicest location.</p>

                <h4 class="font-bold">Röschibachstrasse</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/fMw8caqEvk1T7iwA9"
                    rel="nofollow noreferrer">Röschibachstrasse 79, 8037 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Nice shop near Wipkingen. straight on the square and you can taste their ice cream.
                The shop is not too big without seating, so the queue builds up quite easily.</p>

                <h4 class="font-bold">Frau Gerold's Garden</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/7kcWwB1CsGKYiVpn8"
                    rel="nofollow noreferrer">Geroldstrasse 23b, 8005 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 3/3 One of their best shop. You can order the cone, there is never too much queue and sit in the garden outside.</p>

                <h4 class="font-bold">Micas Garden</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/Mu4BxC6iirdegiDe6"
                        rel="nofollow noreferrer">Badenerstrasse 790, 8048 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Micas garten is a beautiful reality, the shop has quite limited selection, but the environment is really nice.</p>
                
                <h4 class="font-bold">Oerlikon</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/9o3ChTrySa3fHWdt7"
                        rel="nofollow noreferrer">Max-Bill-Platz 13, 8050 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 It is inside the Bachmann bakery, so it is open only during the afternoon, but at least they have many seatings.</p>

                <h4 class="font-bold">Hardturm</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CN4g4952gb9yNeXQ7"
                        rel="nofollow noreferrer">Winzerhalde 12, 8049 ZüPfingstweidstrasse 102, 8005 Zürichrich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 1/3 You get an ice cream, that's it. Limited flavors to choose from, open only during the afternoon.</p>

                <h4 class="font-bold">Ape Piaggio bei der Werdinsel</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CN4g4952gb9yNeXQ7"
                        rel="nofollow noreferrer">Winzerhalde 12, 8049 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 1/3 You get an ice cream, that's it. 3-4 flavors to choose from.</p>
            </div>



<div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelatissimo</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CRZJ2ksTwuUJ7HH9A"
                        rel="nofollow noreferrer">Sihlfeldstrasse 141, 8004 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop, Gourmet Gelato 12.-</p>

                <p><span class="font-semibold">Taste:</span> 3/3 Really amazing choice of gelati, different flavors, different fruits, new and unique flavors. Really worth a stop by.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth, while the fruit flavors are more fresh, crispy, well, well done.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard zurich cone, scooped into the cone. For each cone or cup, they offer a tasting sample of one other taste. A bit small portions compared to other places.</p>
                <p><span class="font-semibold">Experience:</span>2/3 It's a stand on the side of the street, one of the best for gelatotruck in Zurich, wide variety, not too much queue. You cannot pay by card unfortunately, twint or cash.</p>
            </div>





        <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-blue-600" id="nice">Nice to Try</h2>
  
              <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Giro D'Italia</h3>
                <img src="@image('gelato/giro-ditalia.webp')" class="rounded shadow mx-auto lg:w-1/2" alt="Giro D'Italia">
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/64f1LoMQGUqKsNBQA"
                        rel="nofollow noreferrer">Hohlstrasse 221, 8004 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.5 per scoop</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors and taste, balanced acidity, really
                    new and not easy-to-find tastes.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Smooth and easy, delicate on the mouth but still
                    consistent
                    and with a nice texture.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich ice cream, ice cream scooped into
                    the waffle cone. If they would use a spatula, would be 3/3.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Cozy bar and gelateria. Weird location on the corner
                    of Hardstrasse with all the traffic. Nice variety of tastes and other desserts. </p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Eisladen</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/xcxVHRugHPEUazjz9"
                        rel="nofollow noreferrer">Birmensdorferstrasse 101, 8003 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.90 small, 7.50 medium, 11.- big</p>
                <img src="@image('gelato/eisladen.webp')" alt="Gelato Eisladen" class="mx-auto rounded shadow lg:w-1/2">
                <p><span class="font-semibold">Taste:</span> 2/3 Simple and nice flavors, too much inclusions sometimes especially</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Creamy and smooth gelato, good portions.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice cone, good portions, still using the scoop.</p>
                <p><span class="font-semibold">Experience:</span>3+/3 One of the most beautiful and artsy ice cream shops in
                    Zurich. It makes you feel like you stepped into a studio and not into a shop: creative and cozy.
                    One of the few places where they smile at you when you enter.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Caredda</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/VLzbZ6BvZYEDDkKE7"
                        rel="nofollow noreferrer">Josefstrasse 119, 8005 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 5.50 small (2 flavors), 6.50 big (3 flavors)</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Simple and nice flavors, some flavors are amazing some a bit more bland.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Creamy and nice gelato, good portions.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 Nice cone, good portions, finally one of the few places that use a spatula and not the scoop.</p>
                <p><span class="font-semibold">Experience:</span>2/3 The gelateria is really hidden, Caredda is a famous italian bar and pastry shop. Amazing pastries, the ice cream is a bit hidden and if you don't know it, you won't find it.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">aMA Pasticceria Gelateria Italiana</h3>
                <img src="https://static.wixstatic.com/media/f50c73_f55ed1ef98da463db650d97054e38de8~mv2.jpg/v1/fit/w_625,h_414,q_90,enc_avif,quality_auto/f50c73_f55ed1ef98da463db650d97054e38de8~mv2.jpg"
                    class="rounded shadow lg:w-1/2 mx-auto" alt="aMA Gelateria">
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/89RPQ7gFtTzE8FEeA"
                        rel="nofollow noreferrer">Albisriederstrasse 253, 8047 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- one flavor, 5.50 two flavors</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors and taste, not overly sweet, with
                    distinct
                    balanced tastes.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Smooth and creamy ice cream, delicate on the mouth but
                    still
                    consistent and refreshing.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard service of Zurich ice cream, ice cream
                    scooped
                    into the waffle cone.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Cozy and welcoming bar and shop. Nice variety of ice
                    creams and even other desserts. Loved the inside decor. </p>
            </div>

        <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Leonardo</h3>

                <p class="pb-4"><span class="font-semibold">Price:</span> 3.90 1 Scoop, 7.60 2 Scoops, 11.- 3 Scoops </p>
                <p><span class="font-semibold">Taste:</span> 2/3 Simple nice flavors, some flavors are definetely better than the others, some flavors are really good, some too sweet and more bland.
                </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Well done, both the fruit and the more creamy flavors, nothing to complain.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard cone of Zurich, scoops into the cone.</p>
                <h4 class="font-bold">Sihlcity</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/X7we6ZWAoJZGgFpT8"
                        rel="nofollow noreferrer">Kalanderpl. 1, 8045 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 3/3 Really nice and beautiful shop, I think it is the first shop in Zurich for this brand.</p>
                <h4 class="font-bold">Leonardo am Bellevue</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/qj5VhWJNX8v55CLv9"
                        rel="nofollow noreferrer">Theaterstrasse 12, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Nice simple shop on the side of Bellevue.</p>
              
                <h4 class="font-bold">Shopville HB</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/tHjNyYumjyhKKiv3A"
                        rel="nofollow noreferrer">ShopVille, Museumstrasse 1, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 1/3 Simple stand in the main station, you grab your ice cream and go away.</p>
                              
                <h4 class="font-bold">Globus Bahnhofstrasse</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/tHjNyYumjyhKKiv3A"
                        rel="nofollow noreferrer">Schweizergasse 11, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Nice stand, not too crowded, wide selection.</p>

            </div>


            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelati Bongusto</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/8S1sHytxWqxcqcts9"
                        rel="nofollow noreferrer">Polyterrasse, 8001 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- one scoop, 7.- two scoops</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really really great flavors and new and unique tastes, the mango and peach is something would suggest to try.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Smooth and creamy ice cream, really loved the fruit flavors that were more "crunchy" and refreshing.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich Cone, ice cream scooped into the cone.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 It's one of the most well managed food trucks for ice cream, the problem is they are only there on friday afternoon. </p>
            </div>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Diamante</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/YhGte4eY6CzRVPpe7"
                        rel="nofollow noreferrer">Berninapl. 2, 8057 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop</p>

                <p><span class="font-semibold">Taste:</span> 2/3 Nice ice cream, the dark chocolate sorbet impressed me, really well done.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Well done overall. Nice and smooth.
                </p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard zurich cone, scooped into the waffle.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Nice shop with aircon, a bit empty, but you can eat your ice cream inside, especially if it is really really hot outside.</p>
            </div>



            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Don Vito</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/7gdzkagUpQFb4uer5"
                        rel="nofollow noreferrer">Bellerivestrasse 2, 8008 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 peer scoop.</p>
                
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice combinations and flavors. Some are really really great, like the berry ones.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Creamy and smooth gelato, good portions.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice cone, good portions. Ice cream is scooped.</p>
                <p><span class="font-semibold">Experience:</span>1/3 They work too fast and some of the staff really makes a mess, the ice cream gets all mixed up, between the different flavor.</p>
            </div>

           <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Positano</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/EoCZdbijwcpGdJxo9"
                        rel="nofollow noreferrer">Stampfenbachstrasse 6, 8001 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span>3.50 per scoop.</p>
                <p><span class="font-semibold">Taste:</span> 2/3 Simple flavors, well done, really enjoyable.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Nice texture, maybe a bit too chewy, good portions.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard zurich cone. Ice cream is scooped.</p>
                <p><span class="font-semibold">Experience:</span>2/3 Nice gelateria in the corner of the restaurant. Really nice staff.</p>
            </div>

                        <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Chez Réne</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/ngUwEvJxpxg5J5CbA"
                        rel="nofollow noreferrer">Seefeldquai, 8008 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop, +0.5 for the cone.</p>
                <p><span class="font-semibold">Taste:</span> 2/3 Simple and easy flavors. Really appreciated the chocolate one.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Creamy and smooth gelato, nothing.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice cone, okay portions, scooped into the ice cream.</p>
                <p><span class="font-semibold">Experience:</span>2/3 One of the few nice places near Chinagarten. </p>
            </div>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Vegelateria the Sacred</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/YhGte4eY6CzRVPpe7"
                        rel="nofollow noreferrer">Berninapl. 2, 8057 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop</p>

            <p><span class="font-semibold">Taste:</span> 2/3 Great flavors overall. Some options had an overpowering coconut taste, but others were genuinely enjoyable.</p>
            <p><span class="font-semibold">Texture:</span> 2/3 Surprisingly smooth and well-executed, especially considering it's dairy-free.</p>
            <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich-style cone, with scoops placed in a waffle cone.</p>
            <p><span class="font-semibold">Experience:</span> 3/3 I really liked the shop. While the flavor selection was limited, they offered a variety of ice cream styles. I especially appreciated their focus on vegan options — perhaps not wildly popular, but still a great initiative.</p>
            </div>

            <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-red-600" id="forgettable">Forgettable</h2>

            <div class="space-y-2 border-b-2 pb-2" id="tellhof">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelati</h3>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 per Scoop</p>
                <img src="https://www.gelati1998.ch/wp-content/uploads/2022/08/dsk03312-1120x630.jpg" alt="Gelati Tellhof"
                    class="w-full rounded shadow">

                <p><span class="font-semibold">Taste:</span> 1/3 Attempt to make new tastes, but it feels to bland and
                    mellow. The tastes miss power and impact.</p>
                <p><span class="font-semibold">Texture:</span> 1/3 A bit too cold, probably too much sugar.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", the cone is too big for 2 scoop and you need necessarily a spoon. </p>
                
                <h4 class="font-bold">Tellhof</h4>
                 <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/hWXLW1TQBc8rb7S9A"
                        rel="nofollow noreferrer">Tellstrasse 20, 8004 Zurich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 3/3 Nice shop, you can walk in and look at the different
                    tastes and flavors. The queue runs smoothly, and the waiters are really nice. Love the "tasting" sample,
                    they give you on top.</p>.
                <h4 class="font-bold">Niederdorf</h4>
                 <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/w5WjzCjyoLHUCxYq8"
                        rel="nofollow noreferrer">Münstergasse 29, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 1/3 Really simple shop, grab your cone and go..</p>
                <h4 class="font-bold">Milchbuch</h4>
                 <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/H6xcnqsoqCMUNZsaA"
                        rel="nofollow noreferrer">Schaffhauserstrasse 120, 8057 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Simple shop, you can walk in grab your cone, with a tent outside to eat your ice cream.</p>
                         <h4 class="font-bold">Am See</h4>
                 <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/ZDKgvBHHKtP6pVpz7"
                        rel="nofollow noreferrer">Seefeldquai, 8008 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p><span class="font-semibold">Experience:</span> 2/3 They have a limited selection, but it is probably one of the nicest shops on that lake side.</p>
            </div>

                       <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">LucyGoose Ice Creamery</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/w5WjzCjyoLHUCxYq8"
                        rel="nofollow noreferrer">Kreuzbühlstrasse 8, 8008 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>

                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per 1 scoop, 7.- per 2 scoops</p>
                    
                    <p><span class="font-semibold">Taste:</span> 1/3 The tastes did not impress me, really forgottable and simply an iced cream.</p>
                    <p><span class="font-semibold">Texture:</span> 3/3 Smooth, soft, easy to eat, melts in the mouth. </p>
                    <p><span class="font-semibold">Presentation:</span> 3/3 The portion are bigs, the ice cream is served with a spatula. </p>
                    <p><span class="font-semibold">Experience:</span> 2/3 Nice shop on the side of Stadelhofen with some seatings outside. </p>
            </div>
            
            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">L’Artisan Glacier</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/Log41U4wkFWL3Zkv8"
                        rel="nofollow noreferrer">Münstergasse 29, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>

                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop</p>
                            
                    <p><span class="font-semibold">Experience:</span> 1/3 Nice shop, you can walk in and look at the different
                        tastes and flavors. However, there are really tooooooo many flavors that is almost too difficult to choose from. </p>
                <p><span class="font-semibold">Taste:</span> 1/3 Nice and well done ice cream, most of the time, but the selection is so wide that you may get a more "meh" taste. Some are nice, some are really forgettable. It is like playing roulette.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Smooth, soft, easy to eat, melts in the mouth. </p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", the cone is well done, with a crunchy waffle. Big portions. </p>
            </div>

          <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Sorbetto Ice Cream</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/3JvcALSo7vfXJAnP8"
                        rel="nofollow noreferrer">Neptunstrasse 49, 8032 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per 1 scoop, 7.50 per 2 scoops</p>

                <p><span class="font-semibold">Taste:</span> 2/3 Simple ice cream, did not impress me too much.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Okay, maybe a bit too cold and the ice cream was really hard.
                </p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice portions, but standard zurich cone, scooped into the waffle.</p>
                <p><span class="font-semibold">Experience:</span> 1/3 The shop looks like more a supermarket than a gelateria. Nice staff anyhow.</p>
            </div>

            
          <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Meno Venti</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/QNAiuHG5TehptSmG6"
                        rel="nofollow noreferrer">Blatterwiese, 8008 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per 1 scoop, 7.50 per 2 scoops</p>

                <p><span class="font-semibold">Taste:</span> 1/3 Simple ice cream, did not impress me too much. But okay overll.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Okay. Really forgettable ice cream.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice portions, but standard zurich cone, scooped into the waffle.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Simple ice cream truck on the side of Bellevue.</p>
            </div>



            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Mövenpick</h3>

                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 per scoop</p>
                <p><span class="font-semibold">Taste:</span> 1/3 The ice cream is okay, the same thing you buy in the supermarket.</p>
                <p><span class="font-semibold">Texture:</span> 1/3 The structure is well done, but with a lot of air inside the ice cream, it feels really fluffy and not creamy.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard cone of Zurich, ice cream scooped into the cone.</p>
                
                <h4 class="font-bold">Bellevue</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/8kaKYkTXQW9L7xDr6"
                        rel="nofollow noreferrer">Theaterstrasse 8, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>                
                <p><span class="font-semibold">Experience:</span> 2/3 Fancy shop, the queue runs easily, few seatings outside. It works because it is in front of Bellevue.</p>
                <h4 class="font-bold">Zürich HB</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/c4x19g4rHzBuqALt8"
            rel="nofollow noreferrer">Limmatquai 32, 8001 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>     
                <p><span class="font-semibold">Experience:</span> 1/3 Simple shop, you grab your cone and go away. </p>
               <h4 class="font-bold">Sam's Pizzaland</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/U4HcGgPHNKQkeqRq9"
            rel="nofollow noreferrer">Schweizergasse 6, 8001 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>     
                <p><span class="font-semibold">Experience:</span> 1/3 Simple shop, you grab your cone from the window. </p>
                <h4 class="font-bold">China Garten</h4>
                <p><span class="font-semibold">Experience:</span> 0/3 So many vendors, just reselling this ice cream for very high prices.</p>

            </div>


            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Caffé Cioccolato</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/jLCCM8PvqDisg3hZ8"
                        rel="nofollow noreferrer">Lindenplatz 4, 8048 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 small, 6.80 medium</p>
                <p><span class="font-semibold">Taste:</span> 2/3 Not a lot of variety and simple flavors. Did not amaze me too much.
                </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Well done ice cream with a nice smooth feel.</p>
                <p><span class="font-semibold">Presentation:</span> 1/3 Standard Zurich ice cream, scoops into the ice cream, nothing special.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Simple bar in the corner of Lindenplatz, only gelateria in Altstetten so far.</p>
            </div>
        
            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria am Limmatplatz</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/B3wxA9bKqeJ1LUU57"
                        rel="nofollow noreferrer">Kornhausbrücke 2, 8005 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per 1 Scoop, 7.- per 2 Scoops</p>
                <p><span class="font-semibold">Taste:</span> 1/3 Really fake ice creams, all tastes are simply color and artificial flavors.               </p>
                <p><span class="font-semibold">Texture:</span> 3/3 The ice cream is well done on the texture side, but lacks .</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich ice cream, scoops into the ice cream, nothing special.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Simple bar in the corner of Limmatplatz, you can walk get your cone and go away.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Albanesi pregiata Forneria</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/iQyjdBN7qDTVLYJu8"
                        rel="nofollow noreferrer">Bahnhofplatz 12, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- 1 Scoop, 5.- 2 Scoops, 6.- 3 Scoops </p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors and taste, easy choices, but well
                    done.
                </p>
                <p><span class="font-semibold">Texture:</span> 1/3 Really really difficult to eat, probably to much
                    thickener, the ice cream felt rubbery.</p>
                <p><span class="font-semibold">Presentation:</span> 1/3 Standard Zurich ice cream, scoops into the ice
                    cream.
                    The cone is a really cheap waffle.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Cozy bar in the corner of Zurich HB. Only fault, they
                    do
                    "a bit of everything". It feels more like a market with different shops inside than a single shop. </p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Zepter Bar & Caffé</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/iQyjdBN7qDTVLYJu8"
                        rel="nofollow noreferrer">Bahnhofstrasse 32, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 5.- per scoop </p>
                <p><span class="font-semibold">Taste:</span> 1/3 Flat, empty ice cream, everything tastes the same.
                </p>
                <p><span class="font-semibold">Texture:</span> 1/3 A frozen cream without any joy.</p>
                <p><span class="font-semibold">Presentation:</span> 1/3 Standard Zurich ice cream, scoops into the ice
                    cream.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Bar on the side of Bahnhofstrasse, with a ice cream counter on the side of the street.</p>
            </div>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Imbiss Riviera</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/yTwUYjz1qtbnNmRs6"
                        rel="nofollow noreferrer">Utoquai 2, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop</p>

                <p><span class="font-semibold">Taste:</span> 1/3 Basic flavor. It didn’t leave much of an impression, everything tasted like the same.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Really forgettable ice cream.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice portions, but standard zurich cone, scooped into the waffle.</p>
                <p><span class="font-semibold">Experience:</span> 1/3 Simple ice cream shop on the side of Bellevue.</p>
            </div>

            
            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Café Presse Club</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/jeUgH82TrGXD1PNu5"
                        rel="nofollow noreferrer">Münsterhof 15, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 per scoop</p>

                <p><span class="font-semibold">Taste:</span> 1/3 Very plain. Nothing wrong with it, but nothing special either.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Really forgettable ice cream.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice portions, but standard zurich cone, scooped into the waffle.</p>
                <p><span class="font-semibold">Experience:</span> 1/3 Ice cream sold by a bar in Munsterhof, nothing special.</p>
            </div>


                        <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Adea</h3>
         <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/yDUxhLQhqszsC1jv7" rel="nofollow noreferrer">Theaterstrasse 10, 8001 Zürich
                    Zürich <span class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 1 Scoop 4.-, 2 Scoops 8.-, 3 Scoops 10.-.</p>

                <p><span class="font-semibold">Taste:</span> 1/3 Full of Artificial Aromas, you cannot distinguish the
                    flavors if not for the colors.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Nice and smooth ice cream, served at the right
                    temperature. Melts in the mouth, without freezing your brain.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", still the cone is nice and big, but not so large that you need a spoon to eat it.
                </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Ok. You just buy from the window, but at least you can
                    see the different Gelato flavors. </p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Confiseur Bachmann</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/AkjhZwpCF3hBw7qE7"
                        rel="nofollow noreferrer">Bahnhofstrasse 19, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.40 1 Scoop, 7.80 2 Scoops</p>
                <p><span class="font-semibold">Taste:</span> 0/3 Simple flavors, made witfh cheap artificial flavors.
                </p>
                <p><span class="font-semibold">Texture:</span> 1/3 Really bad texture, too soft and airy and gummy.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard cone of Zurich, ice cream scooped into the cone.</p>
                <p><span class="font-semibold">Experience:</span> 0/3 Most unpolite and horrible person behind the counter, nice shop on the other side.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Dieci</h3>

                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 per 1 flavor, 7.50 per 2 flavors</p>
                <p><span class="font-semibold">Taste:</span> 0/3 The ice cream just tastes of sugars and flavorings. The worst ice cream of Zurich.</p>
                <p><span class="font-semibold">Texture:</span> 1/3 Really icy cone, it was difficult to eat as it was completely frozen.</p>
                <p><span class="font-semibold">Presentation:</span> 0/3 The cone is the cheapest waffle of Zurich, not good at all, the ice cream simply scooped into it.</p>
                
                <h4 class="font-bold">Niederdorf</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/iQyjdBN7qDTVLYJu8"
                        rel="nofollow noreferrer">Niederdorfstrasse 40, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>                
                <p><span class="font-semibold">Experience:</span> 0/3 You have to queue next to people eating pizzas, you grab your cone and go away. The shop does a bit of everything (pizza, gelato, pasta).</p>
                <h4 class="font-bold">Limmatquai</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/3nWrV3SZxq9pvzac6"
            rel="nofollow noreferrer">Limmatquai 32, 8001 Zürich <span class="whitespace-no-wrap">(<span
                    class="font-semibold">Maps</span>)</span> </a> </p>     
                <p><span class="font-semibold">Experience:</span> 1/3 A bit better than the other, you are on the limmatquai, below Grossmunster.</p>

            </div>
        </div>
        <div class="mt-4">
            <h2 class="font-serif text-xl lg:text-xl">Want to know more on how I evaluated and ranked all the ice cream shops?</h2>
            <p>Follow <a href="/gelato" class="inline-link">this link</a>, to learn more about the gelaterias of Zurich.</p>
            <p class="text-right">Marco</p>
        </div>
    </article>
@endsection
