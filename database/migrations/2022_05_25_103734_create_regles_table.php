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
        Schema::create('regles', function (Blueprint $table) {
            $table->id();
            $table->string('regle');
            $table->string('type_regle');
            $table->string('element');
            $table->integer('inf');
            $table->integer('sub');
            $table->string('class_id');
            $table->integer('active');
            $table->integer('mmte_id');
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
        Schema::dropIfExists('regles');
    }
};
