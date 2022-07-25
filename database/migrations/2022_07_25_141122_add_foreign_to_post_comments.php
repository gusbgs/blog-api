<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('post_comments', function (Blueprint $table) {
            $table->foreign('post_id')
                   ->references('id')
                   ->on('posts')
                   ->onUpdate('CASCADE')
                   ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::table('post_comments', function (Blueprint $table) {

        });
    }
};
