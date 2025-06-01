@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'The Gelaterias of Zurich [RANKED]',
        description: 'After trying more than 30 gelaterias in the city center of Zurich, I choose the top 3 and bottom 3 of my list. Here are the winners and losers. Discover and learn how to taste ice cream.',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto px-2 mb-12 mt-2 lg:mt-4">
        <h1 class="font-head text-4xl lg:text-5xl text-center font-bold">
            The review of 30 gelaterias of Zurich
        </h1>
        <p class="text-xl lg:text-2xl text-center text-stone-700">Here is all the Gelaterias I tried in Zurich in the last
            weeks. Divided into "The Must Try", "Nice to Try" and "Forgettable"</p>
        <hr class="mt-4 mb-8 ">

        <div class="space-y-4">
            <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-yellow-600">The Must Try
            </h2>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Vittorio Vanini</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CRZJ2ksTwuUJ7HH9A"
                        rel="nofollow noreferrer">Limmatquai 74, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per scoop, Gourmet Gelato 12.-</p>

                <img src="@image('gelato/vittorio_vanini.webp')" alt="Gelato Vittorio Vanini" class="mx-auto rounded shadow lg:w-1/2">
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors, rich and intense.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth, amazing texture.</p>
                <p><span class="font-semibold">Presentation:</span> 3+/3 The most beautiful gelato of Zurich, especially if
                    you try the Gourmet one. The waitress correctly prepared the ice cream with a spatula and not by
                    scooping it. Really crispy waffles for the cone.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Beautiful shop on the Limmatquai, the various flavors
                    are not exposed by you have a really clear menu on the wall and some premade combinations that make it
                    easier to choose.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Rosso Arancio</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/621KkMixKwdRygFo8"
                        rel="nofollow noreferrer">Stauffacherstrasse 37, 8004 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 small, 7.50 medium-</p>
                <p><span class="font-semibold">Taste:</span> 3+/3 The richest and most delightful gelato of Zurich. Intese
                    flavors, a </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Super creamy and smooth with a rich, full texture that
                    fills your mouth. Really satisfying to eat.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 They use the spatula and not the scoop, crunchy
                    cone, big and full cone.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Nice shop near stauffaucher, you can see easily all the
                    flavors exposed, a good range of choice without being overwhelming and
                    not only the standard choice.</p>
            </div>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Raffael's</h3>
                <p><span class="font-semibold">Address:</span> Torgasse 3, 8001 Zürich ( <a
                        href="https://maps.app.goo.gl/gYHi9fZ5joEMdHHy6" class="inline-link">Maps</a> ) </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 5.- per Scoop</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Incredible flavor, each single one shines through clearly.
                    Not overly sweet, with distinct balanced aromas. Rich, powerful, and perfectly balanced on the palate.
                </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Luxuriously smooth and velvety, it melts effortlessly in
                    your mouth. Soft, airy, yet keeps it shape while you eat itt.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 Beautifully served with a spatula instead of
                    scooping, giving it an artisanal touch I'm looking for. Comes with a crisp, golden waffle.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Cozy and welcoming shop where you can select your
                    preferred taste. Nice variety, including fruit options. The ice cream is freshly served straight from
                    the barrel of the Machine. </p>
            </div>



        <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-blue-600">Nice to Try</h2>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Di Berna</h3>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.70 Medium Portion, 5.50 Big Portion</p>

                <p><span class="font-semibold">Taste:</span> 3/3 Nice selection of tastes, they are getting better year
                    after year. You can definitely taste the difference between similar taste, the taste lingers and it is
                    enjoyable</p>
                <p><span class="font-semibold">Texture:</span> 2/3 Nice cone, but a bit too cold serve. The ice cream was
                    still rock solid and difficult to eat with the mouth. Nice portions, vague attempt of using the spatula
                    to
                    servethe
                    ice cream. In other shops the ice cream was too soft and almost liquid.</p>
                <p><span class="font-semibold">Presentation:</span> 3/3 The ice cream is well presented, the cone holds,
                    nice portions, a vague attempt of the server to spatulate the ice cream. </p>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/GJ76azcY3rDTqqiV8"
                        rel="nofollow noreferrer">Weststrasse 196, 8003 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>

                <h4 class="font-bold">Brupbacherplatz</h4>

                <p><span class="font-semibold">Experience:</span> 2/3 Their most famous shop, but the queue is really too
                    long.
                    They have the menu online so you can prepare, but it is still a bit boring to go there.</p>
                
                                    <h4 class="font-bold">Zollhaus</h4>

                    <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/JvMZD3tXfkteAU8r9"
                        rel="nofollow noreferrer">Zollstrasse 117, 8005 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>

                <p><span class="font-semibold">Experience:</span> 3/3 Much prettier shop with a lot of open space, much less
                    queue for the same tastes and prices. Nicest location.</p>
                <h4 class="font-bold">Ape Piaggio bei der Werdinsel</h4>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/CN4g4952gb9yNeXQ7"
                        rel="nofollow noreferrer">Winzerhalde 128049 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>

                <p><span class="font-semibold">Experience:</span> 1/3 You get an ice cream, that's it.</p>
            </div>


            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Eisladen</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/xcxVHRugHPEUazjz9"
                        rel="nofollow noreferrer">Birmensdorferstrasse 101, 8003 Zürich <span
                            class="whitespace-no-wrap">(<span class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.50 small, 7.50 medium-</p>
                <img src="@image('gelato/eisladen.webp')" alt="Gelato Eisladen" class="mx-auto rounded shadow lg:w-1/2">
                <p><span class="font-semibold">Taste:</span> 3/3 Rich and full flavors, well done</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Creamy and smooth gelato, good portions.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Nice cone, good portions, still using the scoop.</p>
                <p><span class="font-semibold">Experience:</span>3+/3 One of the most beautiful and artsy ice cream shops in
                    Zurich. It makes you feel like you stepped into a art studio: creative, cozy, and full of character.
                    One of the few places where they smile at you when you enter.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Giro D'Italia</h3>
                <img src="@image('gelato/giro-ditalia.webp')" class="rounded shadow mx-auto lg:w-1/2" alt="Giro D'Italia">
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/64f1LoMQGUqKsNBQA"
                        rel="nofollow noreferrer">Hohlstrasse 221, 8004 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.5 per scoop</p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors and taste, balanced acidity, really
                    new
                    and not easy-to-find tastes.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Smooth and easy, delicate on the mouth but still
                    consistent
                    and with a nice texture.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich ice cream, ice cream scooped into
                    the
                    waffle cone. If they would use a spatula, would be 3/3.</p>
                <p><span class="font-semibold">Experience:</span> 3/3 Cozy bar and gelateria. Weird location on the corner
                    of
                    Hardstrasse with all the traffic. Nice variety of tastes and other desserts. </p>
            </div>

            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">L’Artisan Glacier</h3>
                <p><span class="font-semibold">Address:</span> Limmatquai 36, 8001 Zurich </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per Scoop</p>
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4noOdRHLMuBEzzCKXjLfhikgXKKF04TfGdM2lSChedSlHuL4xvTDHeoFFmABIxAWDlixAoiNAEbjlfvLZWZmYpQb9IQSKmLtqexz2oNQTQNBJh1BDUVfFUgyDlAT8GI9_ZSz1K-sdg=s1360-w1360-h1020-rw"
                    alt="L'Artisan Glacier" class="rounded shadow mx-auto lg:w-1/2">

                <p><span class="font-semibold">Taste:</span> 3/3 Nice and well done ice cream, each flavor has distinct
                    aromas, not too sweet, powerful and well balanced taste..</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Really smooth, soft, easy to eat, melts in the mouth.
                </p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", the cone is well done, with a crunchy waffle. Big portions. </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Nice shop, you can walk in and look at the different
                    tastes and flavors. Many many flavors that is almost too difficult to choose from.</p>
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



            <h2 class="text-bold font-head text-2xl lg:text-4xl text-center underline decoration-red-600">Forgettable</h2>


            <div class="space-y-2 border-b-2 pb-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Adea</h3>
                <p><span class="font-semibold">Address:</span> Theaterstrasse 10, Bellevue, 8001 Zurich </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 1 Scoop 4.-, 2 Scoops 8.-, 3 Scoops 10.-.</p>

                <p><span class="font-semibold">Taste:</span> 0/3 Full of Artificial Aromas, you cannot distinguish the
                    flavors if not for the colors.</p>
                <p><span class="font-semibold">Texture:</span> 3/3 Nice and smooth ice cream, served at the right
                    temperature. Melts in the mouth, without freezing your brain.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", still the cone is nice and big, but not so large that you need a spoon to eat it.
                </p>
                <p><span class="font-semibold">Experience:</span> 2/3 Ok. You just buy from the window, but at least you can
                    see the different Gelato flavors. </p>
            </div>


            <div class="space-y-2 border-b-2 pb-2" id="tellhof">
                <h3 class="font-serif text-2xl lg:text-3xl">Gelati Tellhof</h3>
                <p><span class="font-semibold">Address:</span> Tellstrasse 20, 8004 Zurich </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 per Scoop</p>
                <img src="https://www.gelati1998.ch/wp-content/uploads/2022/08/dsk03312-1120x630.jpg" alt="Gelati Tellhof"
                    class="w-full rounded shadow">

                <p><span class="font-semibold">Taste:</span> 2/3 Attempt to make new tastes, but it feels to bland and
                    mellow. The tastes miss power and impact.</p>
                <p><span class="font-semibold">Texture:</span> 2/3 A bit too cold, probably too much sugar.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not
                    "<em>spatulated</em>", the cone is too big for 2 scoop and you need necessarily a spoon. </p>
                <p><span class="font-semibold">Experience:</span> 3/3 Nice shop, you can walk in and look at the different
                    tastes and flavors. The queue runs smoothly, and the waiters are really nice. Love the "tasting" sample,
                    they give you on top.</p>
            </div>




                <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Caffé Cioccolato</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/jLCCM8PvqDisg3hZ8"
                        rel="nofollow noreferrer">Lindenplatz 4, 8048 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 small, 6.80 medium</p>
                <p><span class="font-semibold">Taste:</span> 1/3 Nice gelato does its job, not a lot of variety and simple flavors. Did not amaze me too much.
                </p>
                <p><span class="font-semibold">Texture:</span> 3/3 Well done with a nice smooth feel.</p>
                <p><span class="font-semibold">Presentation:</span> 2/3 Standard Zurich ice cream, scoops into the ice
                    cream, nothing special.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Simple bar in the corner of Lindenplatz, only gelateria in Altstetten so far.</p>
            </div>

            <div class="space-y-2 border-b-2 py-2">
                <h3 class="font-serif text-2xl lg:text-3xl">Albanesi pregiata Forneria</h3>
                <p><span class="font-semibold">Address:</span> <a href="https://maps.app.goo.gl/iQyjdBN7qDTVLYJu8"
                        rel="nofollow noreferrer">Bahnhofplatz 12, 8001 Zürich <span class="whitespace-no-wrap">(<span
                                class="font-semibold">Maps</span>)</span> </a> </p>
                <p class="pb-4"><span class="font-semibold">Price:</span> </p>
                <p><span class="font-semibold">Taste:</span> 3/3 Really nice flavors and taste, easy flavors, but well
                    done.
                </p>
                <p><span class="font-semibold">Texture:</span> 1/3 Really really difficult to eat, probably to much
                    thikener,
                    the ice cream was rubbery .</p>
                <p><span class="font-semibold">Presentation:</span> 1/3 Standard Zurich ice cream, scoops into the ice
                    cream.
                    The cone is a really cheap waffle.</p>
                <p><span class="font-semibold">Experience:</span> 2/3 Cozy bar in the corner of Zurich HB. Only fault, they
                    do
                    "a bit of everything". It feels more like a market with different shops inside than a single shop. </p>
            </div>
        </div>
    </article>
@endsection
