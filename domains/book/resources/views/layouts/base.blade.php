@extends('azzarip::base')

@section('body')
    <main>
        <div class="lg:w-[64rem] mx-auto mb-8">
            <div class="grid grid-cols-1 gap-x-12 lg:grid-cols-2 lg:w-[64rem] mx-auto mb-8">

                <div class="mx-auto">

                    @yield('first_column')
                </div>


                <div class="bg-white max-lg:px-2 max-lg:mt-2">
                        {{-- 
                    @auth
                    <h2 class="text-2xl font-bold text-center font-trajan">Reserve your seat</h2>

                        <x-book::payment :clientSecret="$paymentIntent->client_secret" />
                    @endauth --}}

                    @yield('second_column')
                </div>

            </div>

        </div>

        </div>
    </main>
@endsection

