<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('logo', 100);
            $table->string('favicon', 100);
            $table->string('city', 100);
            $table->string('address', 100);
            $table->string('phone', 100);
            $table->string('work_hours', 100);
            $table->string('email', 100);
            $table->text('map');
            $table->string('fb', 100);
            $table->string('twitter', 100);
            $table->string('insta', 100);
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
        Schema::dropIfExists('settings');
    }
}
