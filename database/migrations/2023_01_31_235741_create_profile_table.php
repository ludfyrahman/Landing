<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_profile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('desc');
            $table->string('email');
            $table->string('logo');
            $table->string('visi');
            $table->string('misi');
            $table->string('intro')->nullable();/** video or photo */
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
        Schema::dropIfExists('profile');
    }
}
