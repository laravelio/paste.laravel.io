<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UniquePasteHash extends Migration
{
    public function up()
    {
        Schema::table('pastes', function (Blueprint $table) {
            $table->unique('hash');
        });
    }
}
