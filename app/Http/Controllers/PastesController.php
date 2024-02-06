<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasteRequest;
use App\Models\Paste;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PastesController extends Controller
{
    public function post(PasteRequest $request): RedirectResponse
    {
        $paste = Paste::fromRequest($request);

        return redirect()->route('show', $paste->hash);
    }

    public function show(Paste $paste): View
    {
        return view('show', compact('paste'));
    }

    public function raw(Paste $paste): View
    {
        return view('raw', compact('paste'));
    }

    public function edit(Paste $paste): View
    {
        return view('edit', compact('paste'));
    }

    public function fork(PasteRequest $request, Paste $paste): RedirectResponse
    {
        $paste = Paste::fromFork($paste, $request);

        return redirect()->route('show', $paste->hash);
    }
}
