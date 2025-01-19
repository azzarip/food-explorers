@props(['event_id'])

@push('scripts')
<div x-data="{show: false}" x-cloak x-show="show" @cancel.window="show = true" class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center bg-black/50">
    <div x-show=show x-transition.scale.origin.right.50 @click.outside="show = false"
        class="fixed z-50 w-full max-w-sm p-4 mx-4 bg-white rounded-lg">
            <p class="text-xl text-center font-head">Are you sure you want to cancel your participation in this event?</p>

            <div class="flex justify-around mt-10">
                <button class="w-1/4 min-w-[100px] py-2 text-2xl border-2 border-black rounded-lg hover:bg-black hover:text-white" @click="show = false" type="button">
                    No
                </button>

                <x-forms::base :action="route('participation.cancel', ['event'=> $event_id])" >
                <button class="w-1/4 min-w-[100px] py-2 text-2xl border-2 border-black rounded-lg hover:bg-black hover:text-white bg-red-100" type="submit">
                    <x-heroicon-o-x-mark class="inline w-8 h-8 text-red-800" /> Yes
                </button>
                @method('delete')
                </x-forms::base>
            </div>
    </div>
</div>
@endpush
