<?php

namespace App;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'pastes';

    public static function fromRequest(Request $request): Paste
    {
        return static::createNew(new static(), $request);
    }

    public static function fromFork(Paste $fork, Request $request): Paste
    {
        $paste = new static();
        $paste->parent_id = $fork->id;

        return static::createNew($paste, $request);
    }

    private static function createNew(Paste $paste, Request $request): Paste
    {
        $paste->code = $request->get('code');
        $paste->ip = $request->ip();
        $paste->save();

        $paste->hash = Uuid::uuid4()->toString();
        $paste->save();

        return $paste;
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteKeyName()
    {
        return 'hash';
    }
}
