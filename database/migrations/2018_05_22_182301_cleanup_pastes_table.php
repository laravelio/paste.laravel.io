<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CleanupPastesTable extends Migration
{
    public function up()
    {
        Schema::table('pastes', function (Blueprint $table) {
            $table->dropColumn(['author_id', 'ip']);
        });
    }
}
