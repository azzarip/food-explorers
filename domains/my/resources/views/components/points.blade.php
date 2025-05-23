@props(['points'])

<div class="p-1 rounded-lg bg-linear-to-tr from-yellow-500 via-yellow-400 to-yellow-700">
    <div class="px-4 pt-4 pb-2 bg-white rounded-md">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-2/3">
                <p>Your level is:</p>
                <p class="my-2 text-3xl space-y-3ellow-700 font-trajan">
                    @if ($points == 0)
                        ROOKIE
                    @elseif($points < 20)
                        EXPLORER
                    @else
                        MASTER EXPLORER
                    @endif
                </p>
            </div>
            <div class="lg:w-1/3">
                <p>You currently have:</p>
                <p class="my-2 text-3xl font-semibold font-head">{{ $points }} points</p>
            </div>
        </div>

        {{ $slot }}
    </div>
</div>
