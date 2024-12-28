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
        $request->validate([
            'name' => 'required|string'
        ]);
        $data = $request->only(['event_type', 'name', 'url', 'text']);
        $authId = auth()->user()->id;

        Suggest::create([
            'text' => implode("\n", $data),
            'contact_id' => $authId,
        ]);

        Cache::put('suggest.' . $authId, true, now()->endOfDay());

        return redirect('/suggest');
    }
}
