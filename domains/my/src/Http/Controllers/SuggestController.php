<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Domains\My\Models\Suggest;
use Illuminate\Support\Facades\Cache;

class SuggestController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $text = $request->validate([
            'text' => 'required|string'
            ])['text'];
        $authId = auth()->user()->id;

        Suggest::create([
            'text' => $text,
            'contact_id' => $authId,
        ]);

        Cache::put('suggest.' . $authId, true, now()->endOfDay());

        return redirect('/suggest');
    }
}
