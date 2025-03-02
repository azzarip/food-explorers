@extends('azzarip::layouts.1col', ['nav' => false])

@section('main')
    <section class="flex items-center justify-center min-h-screen wrapper">
        <div class="p-6 mx-auto border rounded-lg shadow-md min-w-lg">

            <p class="text-2xl text-center lg:text-3xl font-trajan">{{ $event->title }}</p>
            <p class="font-semibold text-center text-amber-700/80">{{ $event->scheduled_at->format('j F Y') }}</p>
            <h1 class="mt-4 text-2xl text-center">How would you rate this experience, overall? </h1>
            <form method="POST">
                @csrf

                <div class="my-10 radio">

                    <input id="rating-5" type="radio" name="rating" value="10" />
                    <label for="rating-5" title="5 stars">
                        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </label>

                    <input id="rating-4" type="radio" name="rating" value="8" />
                    <label for="rating-4" title="4 stars">
                        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </label>

                    <input id="rating-3" type="radio" name="rating" value="6" />
                    <label for="rating-3" title="3 stars">
                        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </label>

                    <input id="rating-2" type="radio" name="rating" value="4" />
                    <label for="rating-2" title="2 stars">
                        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </label>

                    <input id="rating-1" type="radio" name="rating" value="2" />
                    <label for="rating-1" title="1 star">
                        <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                            </path>
                        </svg>
                    </label>
                </div>


                @error('rating')
                    <p class="w-full p-1 text-center rounded-lg bg-red-50">Please select a rating to continue</p>
                @enderror
                <x-button>
                    Continue
                </x-button>
            </form>
        </div>
    </section>

    <style>
        .radio {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-direction: row-reverse;
        }

        .radio>input {
            position: absolute;
            appearance: none;
        }

        .radio>label {
            cursor: pointer;
            font-size: 30px;
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .radio>label>svg {
            fill: #666;
            transition: fill 0.3s ease;
        }

        .radio>label::before,
        .radio>label::after {
            content: "";
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: #ff9e0b;
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            transition:
                transform 0.4s ease,
                opacity 0.4s ease;
            animation: particle-explosion 1s ease-out;
        }

        .radio>label::before {
            top: -15px;
            left: 50%;
            transform: translateX(-50%) scale(0);
        }

        .radio>label::after {
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%) scale(0);
        }

        .radio>label:hover::before,
        .radio>label:hover::after {
            opacity: 1;
            transform: translateX(-50%) scale(1.5);
        }

        .radio>label:hover {
            transform: scale(1.2);
            animation: pulse 0.6s infinite alternate;
        }

        .radio>label:hover>svg,
        .radio>label:hover~label>svg {
            fill: #ff9e0b;
            filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
            animation: shimmer 1s ease infinite alternate;
        }

        .radio>input:checked+label>svg,
        .radio>input:checked+label~label>svg {
            fill: #ff9e0b;
            filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
            animation: pulse 0.8s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }

        @keyframes particle-explosion {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }

            50% {
                opacity: 1;
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                transform: scale(0.5);
            }
        }

        @keyframes shimmer {
            0% {
                filter: drop-shadow(0 0 10px rgba(255, 158, 11, 0.5));
            }

            100% {
                filter: drop-shadow(0 0 20px rgba(255, 158, 11, 1));
            }
        }

        .radio>input:checked+label:hover>svg,
        .radio>input:checked+label:hover~label>svg {
            fill: #e58e09;
        }

        .radio>label:hover>svg,
        .radio>label:hover~label>svg {
            fill: #ff9e0b;
        }

        .radio input:checked~label svg {
            fill: #ffa723;
        }
    </style>
@endsection
