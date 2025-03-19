@extends('azzarip::layouts.1col', ['nav' => false])

@section('main')
    <section class="flex items-center justify-center min-h-screen wrapper">
        <div class="max-w-lg p-4 mx-auto border rounded-lg shadow-md">
            <p class="text-2xl text-center lg:text-3xl font-trajan">{{ $event->title }}</p>
            <p class="font-semibold text-center text-amber-700/80">{{ $event->scheduled_at->format('j F Y') }}</p>

            <h1 class="mt-4 mb-6 text-xl text-center">Would you like to give a more detailed feedback? </h1>
            
            <form method="POST" action="{{ url(request()->path() . '/finish') }}">
                @csrf
                <div class="space-y-4">
              <div>
                <p class="">How satisfied were you with the variety of dishes offered?</p>
              
              <div class="max-w-md mx-auto">
                <div class="flex flex-row-reverse justify-center rating">              
                  <input value="10" name="variety" id="variety5" type="radio">
                  <label title="5 Stars" for="variety5"></label>
                  <input value="8" name="variety" id="variety4" type="radio">
                  <label title="4 Stars" for="variety4"></label>
                  <input value="6" name="variety" id="variety3" type="radio">
                  <label title="3 Stars" for="variety3"></label>
                  <input value="4" name="variety" id="variety2" type="radio">
                  <label title="2 Stars" for="variety2"></label>
                  <input value="1" name="variety" id="variety1" type="radio">
                  <label title="1 Star" for="variety1"></label>
                </div>
              </div>
              </div>
              <div>

              <p class="">How did you like the restaurant ambience and the service?</p>
              <div class="max-w-md mx-auto">
                <div class="flex flex-row-reverse justify-center rating">              
                  <input value="10" name="service" id="service5" type="radio">
                  <label title="5 Stars" for="service5"></label>
                  <input value="8" name="service" id="service4" type="radio">
                  <label title="4 Stars" for="service4"></label>
                  <input value="6" name="service" id="service3" type="radio">
                  <label title="3 Stars" for="service3"></label>
                  <input value="4" name="service" id="service2" type="radio">
                  <label title="2 Stars" for="service2"></label>
                  <input value="1" name="service" id="service1" type="radio">
                  <label title="1 Star" for="service1"></label>
                </div>
              </div>
              </div>
              <div>
              <p class="">Do you feel that the menu met your expectations, or was it different from how was it described?</p>
              <div class="max-w-md mx-auto">
                <div class="flex flex-row-reverse justify-center rating">              
                  <input value="10" name="menu" id="menu5" type="radio">
                  <label title="5 Stars" for="menu5"></label>
                  <input value="8" name="menu" id="menu4" type="radio">
                  <label title="4 Stars" for="menu4"></label>
                  <input value="6" name="menu" id="menu3" type="radio">
                  <label title="3 Stars" for="menu3"></label>
                  <input value="4" name="menu" id="menu2" type="radio">
                  <label title="2 Stars" for="menu2"></label>
                  <input value="1" name="menu" id="menu1" type="radio">
                  <label title="1 Star" for="menu1"></label>
                </div>
              </div>
            </div>

            <div>
              <p>What did you enjoy the most about the experience? Share any thoughts or highlight!</p>
              <textarea name="positive" id="positive" rows="3" class="w-full p-1 mt-2 border rounded-sm" placeholder="(Optional)"></textarea>
            </div>

            <div>
              <p>Where could we improve? Any feedback?</p>
              <textarea name="negative" id="negative" rows="3" class="w-full p-1 mt-2 border rounded-sm" placeholder="(Optional)"></textarea>
            </div>
          </div>
                <x-button>
                    Finish
                </x-button>
                <a href="/review/ty" class="block pr-6 text-xl text-center underline text-slate-600">Skip  </a>
            </form>
        </div>
    </section>

    <style>
.rating:not(:checked) > input {
  position: absolute;
  appearance: none;
}

.rating:not(:checked) > label {
  float: right;
  cursor: pointer;
  font-size: 30px;
  color: #666;
}

.rating:not(:checked) > label:before {
  content: '★';
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
  color: #e58e09;
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
  color: #ff9e0b;
}

.rating > input:checked ~ label {
  color: #ffa723;
}
    </style>
@endsection
