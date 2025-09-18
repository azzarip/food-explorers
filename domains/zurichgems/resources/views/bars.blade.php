@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/20', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Best Bars in Zurich - Zurich Gems',
        description: 'Explore the best bars in Zurich. From stylish cocktail lounges and fancy wine bars to laid-back spots and hidden gems, find the perfect spot for your next night out in the city.',
        image: '' //image('gelato/girl.webp')
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto mt-4 px-2 mb-12">
        <h1 class="font-serif text-3xl md:text-4xl lg:text-5xl text-center font-bold leading-relaxed lg:leading-relaxed">
            Best Bars in Zürich
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 mb-4">
            <div class="w-fit flex gap-2 py-1 text-lg items-center">
                <div>
                    <p class="font-serif font-semibold"> <span class="font-normal">by</span> Marco Azzari
                        <x-heroicon-s-check-badge class="inline w-4 h-4 mb-1 text-cyan-600" />
                    </p>
                    <p class="italic -mt-1">Zurich Food Explorer </p>
                </div>
            </div>
            <p class="italic text-right">published on: <time datetime="2025-09-18">September 18, 2025</time></p>
        </div>

        <div class="space-y-4">
            <div>
                <h2 class="font-bold text-3xl lg:text-4xl text-center"> Here are my favourite bars in Zurich</h2>
                <p class="mt-2">No particular order, the list is still incomplete.</p>
            </div>

<x-zurichgems::bar
    name="Bar am Wasser"
    address="Stadthausquai 1, 8001 Zürich"
    url="https://maps.app.goo.gl/TnPQtWychF6tmrrb6"
/>

<x-zurichgems::bar
    name="Bar Lupo"
    address="Badenerstrasse 155, 8004 Zürich"
    url="https://maps.app.goo.gl/XcM77hgUZuJLuP7NA"
/>

<x-zurichgems::bar
    name="Bar 63"
    address="Rolandstrasse 19, 8004 Zürich"
    url="https://maps.app.goo.gl/BfHWYjssto2PJnhc8"
    description="Perfect bar to sip rums in a cozy environment, near Langstrasse."
/>

<x-zurichgems::bar
    name="Brick Cocktailbar"
    address="Langstrasse 21, 8004 Zürich"
    url="https://maps.app.goo.gl/uP1hEdnPg5KxNKfy6"
/>

<x-zurichgems::bar
    name="Dr. Zhivago Bar"
    address="Bärengasse 29, 8001 Zürich"
    url="https://maps.app.goo.gl/pFeBUjtdDfFQMhou6"
/>

<x-zurichgems::bar
    name="Dry Club"
    address="Langstrasse 133, 8004 Zürich"
    url="https://maps.app.goo.gl/dxYrJEMLtJ35q1Pc8"
    description="The 'Top Floor' of the Tipsy Tiger bar, make sure to reserve. The only real speakeasy of Zurich."
/>

<x-zurichgems::bar
    name="Felix Bar"
    address="Kalkbreitestrasse 8, 8003 Zürich"
    url="https://maps.app.goo.gl/werTF97MaCit2h3T7"
    description="Great outdoor settings, great especially for summer."
/>

<x-zurichgems::bar
    name="George Bar & Grill"
    address="Sihlstrasse 50, 8001 Zürich"
    url="https://maps.app.goo.gl/t3VKhhfbTfj37ZCE9"
    description="Wanna be american bar, great settings on top of the Casino, great in winter for the nice inside or for the summer with the outside."
    />
<x-zurichgems::bar
    name="Gainsbourg Bar"
    address="Kreuzstrasse 26, 8008 Zürich"
    url="https://maps.app.goo.gl/spMqL9DHqEx9fYrP6"
    />

    <x-zurichgems::bar
    name="Igniv Bar"
    address="Marktgasse 17, 8001 Zürich"
    url="https://maps.app.goo.gl/Bqkgxar5WBdq6c7KA"
/>

<x-zurichgems::bar
    name="Kronenhalle Bar"
    address="Rämistrasse 4, 8001 Zürich"
    url="https://maps.app.goo.gl/hpVKM8hBDzUWdVky7"
    description="Inside the famous restaurant Kronenhalle. Worth a visit!"
/>

<x-zurichgems::bar
    name="Late Bloomers"
    address="Dienerstrasse 20, 8004 Zürich"
    url="https://maps.app.goo.gl/BuQuX9NgkU7BS6218"
    description="Try the cocktails with the Greek distillate."
/>

<x-zurichgems::bar
    name="La Catedral"
    address="Birmensdorferstrasse 83, 8003 Zürich"
    url="https://maps.app.goo.gl/HLeqkr5ujFyXDrHA8"
    description="Food and cocktails are both amazing! Real mexican stuff!"
    />

<x-zurichgems::bar
    name="Rooftop Bar 1838"
    address="Poststrasse 12, 8001 Zürich"
    url="https://maps.app.goo.gl/RAXvLjLXxvZtpavK9"
    description="Best Rooftop Bar of Zurich, on top of the Mandarin Savoy."
    />

<x-zurichgems::bar
    name="No Idea"
    address="Dufourstrasse 43, 8008 Zürich"
    url="https://maps.app.goo.gl/ErKdkMRid5VTGwKG9"
    description="Crazy cocktails"
    />


<x-zurichgems::bar
    name="Old Crow Bar"
    address="Schwanengasse 4, 8001 Zürich"
    url="https://maps.app.goo.gl/bhhyVwAaMidtjHyS9"
    description="Historic bar with a huge selection of whiskeys."
    />
    
<x-zurichgems::bar
    name="Tales Bar"
    address="Dufourstrasse 43, 8008 Zürich"
    url="https://maps.app.goo.gl/ErKdkMRid5VTGwKG9"
    description="Crazy cocktails!"
    />
    
<x-zurichgems::bar
    name="Tipsy Tiger"
    address="Langstrasse 133, 8004 Zürich"
    url="https://maps.app.goo.gl/dxYrJEMLtJ35q1Pc8"
    description="Weird cocktail concept, they are premixed, but must try once"
    />
    
<x-zurichgems::bar
    name="Widder Bar"
    address="Widdergasse 6, 8001 Zürich"
    url="https://maps.app.goo.gl/EuAnLyWzUAtySm7AA"
    />

<x-zurichgems::bar
    name="Widder Garage"
    address="Ground Floor, Augustinerhof 1, 8001 Zürich"
    url="https://maps.app.goo.gl/6wGeehV6VimRJNgA7"
    />
    


            <p class="text-right font-serif">Marco</p>
            </div>
    </article>
@endsection

@push('head')
@verbatim
    
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
@endverbatim
@endpush