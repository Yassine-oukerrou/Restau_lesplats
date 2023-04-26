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
        Schema::create('crudcombobox', function (Blueprint $table) {
            $table->id();
            $table->string('name_addition1');
            $table->string('choiceOne1');
            $table->string('choiceTowe1');
            $table->string('choiceThree');
            $table->string('name_addition2');
            $table->string('choiceOne2');
            $table->string('choiceTowe2');
            $table->string('choiceThree2');
            $table->string('name_addition3');
            $table->string('choiceOne3');
            $table->string('choiceTowe3');
            $table->string('choiceThree3');
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
        Schema::dropIfExists('_crudcombobox');
    }
};
