<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->text('ip')->nullable();
            $table->text('device')->nullable();
            $table->text('platform')->nullable();
            $table->text('platform_version')->nullable();
            $table->text('browser')->nullable();
            $table->text('browser_version')->nullable();
            $table->text('country')->nullable();
            $table->text('region')->nullable();
            $table->text('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_infos');
    }
}
