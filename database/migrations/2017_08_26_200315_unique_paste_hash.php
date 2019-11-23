<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UniquePasteHash extends Migration
{
    public function up()
    {
        Schema::table('pastes', function (Blueprint $table) {
            $table->unique('hash');
        });
    }
}
