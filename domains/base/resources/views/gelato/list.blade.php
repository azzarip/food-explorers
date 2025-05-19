@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'The Gelaterias of Zurich [RANKED]',
        description: 'After trying more than 30 gelaterias in the city center of Zurich, I choose the top 3 and bottom 3 of my list. Here are the winners and losers. Discover and learn how to taste ice cream.',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto px-2 mb-12">
        <h1 class="font-head text-4xl lg:text-5xl text-center font-bold">
            The review of 30 gelaterias of Zurich
        </h1>

<div class="space-y-3">
    <div class="space-y-2 border-b-2 pb-2">
        <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Adea</h3>
        <p><span class="font-semibold">Address:</span> Theaterstrasse 10, Bellevue, 8001 Zurich </p>
        <p class="pb-4"><span class="font-semibold">Price:</span> 1 Scoop 4.-, 2 Scoops 8.-, 3 Scoops 10.-.</p>

        <p><span class="font-semibold">Taste:</span> 0/3 Full of Artificial Aromas, you cannot distinguish the flavors if not for the colors.</p>
        <p><span class="font-semibold">Structure:</span> 3/3 Nice and smooth ice cream, served at the right temperature. Melts in the mouth, without freezing your brain.</p>
        <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not "<em>spatulated</em>", still the cone is nice and big, but not so large that you need a spoon to eat it. </p>
        <p><span class="font-semibold">Experience:</span> 2/3 Ok. You just buy from the window, but at least you can see the different Gelato flavors. </p>
    </div>    

    <div class="space-y-2 border-b-2 pb-2">
        <h3 class="font-serif text-2xl lg:text-3xl">Gelateria Di Berna</h3>
        <p><span class="font-semibold">Address:</span> Weststrasse 196, 8003 Zurich (Multiple Locations)</p>
        <p class="pb-4"><span class="font-semibold">Price:</span> 4.70 Medium Portion, 5.50 Big Portion</p>

        <p><span class="font-semibold">Taste:</span> 2/3 Nice selection of tastes, they are getting better year after year. You can definitely taste the difference between similar taste, the taste lingers and it is enjoyable</p>
        <p><span class="font-semibold">Structure:</span>  2/3 Nice cone, but a bit too cold serve. The ice cream was still rock solid and difficult to eat with the mouth. Nice portions, vague attempt of "spatulating" the ice cream.</p>
        <p><span class="font-semibold">Presentation:</span> 3/3 The ice cream is well presented, the cone holds, nice portions, a vague attempt of the server to spatulate the ice cream.  </p>
        <p><span class="font-semibold">Experience:</span> 2/3 Nice shop, but the queue is really too long. They have the menu online so you can prepare, but it is still not the same thing.</p>
    </div>  
    <div class="space-y-2 border-b-2 pb-2" id="tellhof">
        <h3 class="font-serif text-2xl lg:text-3xl">Gelati Tellhof</h3>
        <p><span class="font-semibold">Address:</span> Tellstrasse 20, 8004 Zurich </p>
        <p class="pb-4"><span class="font-semibold">Price:</span> 3.50 per Scoop</p>
        <img src="https://www.gelati1998.ch/wp-content/uploads/2022/08/dsk03312-1120x630.jpg" alt="Gelati Tellhof" class="w-full rounded shadow">

        <p><span class="font-semibold">Taste:</span> 2/3 Attempt to make new tastes, but it feels to bland and mellow. The tastes miss power and impact.</p>
        <p><span class="font-semibold">Structure:</span>  2/3 A bit too cold, probably too much sugar.</p>
        <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not "<em>spatulated</em>", the cone is too big for 2 scoop and you need necessarily a spoon. </p>
        <p><span class="font-semibold">Experience:</span> 3/3 Nice shop, you can walk in and look at the different tastes and flavors. The queue runs smoothly, and the waiters are really nice. Love the "tasting" sample, they give you on top.</p>
    </div>  

        <div class="space-y-2 border-b-2 pb-2">
        <h3 class="font-serif text-2xl lg:text-3xl">L’Artisan Glacier</h3>
        <p><span class="font-semibold">Address:</span> Limmatquai 36, 8001 Zurich </p>
        <p class="pb-4"><span class="font-semibold">Price:</span> 4.- per Scoop</p>
        <img src="https://www.gelati1998.ch/wp-content/uploads/2022/08/dsk03312-1120x630.jpg" alt="Gelati Tellhof" class="w-full rounded shadow">

        <p><span class="font-semibold">Taste:</span> 3/3 Nice and well done ice cream, each flavor has distinct aromas, not too sweet, powerful and well balanced taste..</p>
        <p><span class="font-semibold">Structure:</span>  3/3 Really smooth, soft, easy to eat, melts in the mouth.</p>
        <p><span class="font-semibold">Presentation:</span> 2/3 The ice cream is scooped and not "<em>spatulated</em>", the cone is well done, with a crunchy waffle. Big portions.  </p>
        <p><span class="font-semibold">Experience:</span> 2/3 Nice shop, you can walk in and look at the different tastes and flavors. Many many flavors that is almost too difficult to choose from.</p>
    </div> 
</div>    
</article>
@endsection