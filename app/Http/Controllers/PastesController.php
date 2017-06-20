<?php

namespace App\Http\Controllers;

use App\Paste;
use App\Http\Requests\PasteRequest;
use Illuminate\Database\QueryException;

class PastesController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function post(PasteRequest $request)
    {
        try {
            $paste = Paste::fromRequest($request);
        } catch (QueryException $e) {
            $request->session()->flash('editor_error','Data entered was too long');

            return redirect('/')->withInput();
        }

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

    public function fork(PasteRequest $request, Paste $paste)
    {
        try {
            $paste = Paste::fromFork($paste, $request);
        } catch (QueryException $e) {
            $request->session()->flash('editor_error','Data entered was too long');

            return redirect('/')->withInput();
        }

        return redirect()->route('show', $paste->hash);
    }
}
