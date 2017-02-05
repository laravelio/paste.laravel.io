<?php

namespace App\Http\Controllers;

use App\Paste;
use Hashids\Hashids;

class PastesController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function post()
    {
        $paste = new Paste();
        $paste->code = request('code');
        $paste->ip = request()->ip();
        $paste->save();

        $paste->hash = (new Hashids('Lio Pastebin', 5))->encode($paste->id);
        $paste->save();

        return redirect()->route('show', $paste->hash);
    }

    public function show($hash)
    {
        $paste = Paste::where('hash', $hash)->firstOrFail();

        return view('show', compact('paste'));
    }

    public function edit($hash)
    {
    }

    public function fork($hash)
    {
    }

    public function raw($hash)
    {
    }
}
