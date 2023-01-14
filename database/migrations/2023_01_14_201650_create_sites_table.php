<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('lat');
            $table-> float('lon');
            $table->string('description');
            $table->string('phone');
            $table->string('email');
            $table->string('adress');
            $table->string('zipcode');
            $table->string('city');
            $table->string ('picture');
            $table->boolean('enabled');
            $table->unsignedInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managers');
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
        Schema::dropIfExists('sites');
    }
}
