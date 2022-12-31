<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('Cname');
            $table->string('JPname');
            $table->string('category');
            
            $table->integer('vacancy');
            $table->longText('Jdescription');
            $table->string('Estatus');
            $table->string('workplace');
            $table->longText('Erequirements');
            $table->longText('Experience');
            $table->string('Jlocation');
            $table->integer('Salary');
            $table->string('Obenefits');
            $table->date('Pdate');
            $table->date('Ldate');
            $table->string('logo');

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
        Schema::dropIfExists('jobs');
    }
};
