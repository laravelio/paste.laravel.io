<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasteRequest;
use App\Paste;

class PastesController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function post(PasteRequest $request)
    {
        $paste = Paste::fromRequest($request);

        return redirect()->route('show', $paste->hash);
    }

    public function show(Paste $paste)
    {
        return view('show', compact('paste'));
    }

    public function raw(Paste $paste)
    {
        return view('raw', compact('paste'));
    }

    public function edit(Paste $paste)
    {
        return view('edit', compact('paste'));
    }

    public function fork(PasteRequest $request, Paste $fork)
    {
        $paste = Paste::fromFork($fork, $request);

        return redirect()->route('show', $paste->hash);
    }
}
