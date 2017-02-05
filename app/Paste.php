<?php

namespace App;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Paste extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'pastes';

    public static function fromRequest(Request $request): Paste
    {
        return static::create(new static(), $request);
    }

    public static function fromFork(Paste $fork, Request $request): Paste
    {
        $paste = new static();
        $paste->parent_id = $fork->id;

        return static::create($paste, $request);
    }

    private static function create(Paste $paste, Request $request): Paste
    {
        $paste->code = $request->get('code');
        $paste->ip = $request->ip();
        $paste->save();

        $paste->hash = self::hashid($paste->id);
        $paste->save();

        return $paste;
    }

    private static function hashid(int $id): string
    {
        return (new Hashids('Lio Pastebin', 5))->encode($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteKeyName()
    {
        return 'hash';
    }
}
