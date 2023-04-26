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
        Schema::create('crudplats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('components');
            $table->decimal('new_price');
            $table->decimal('old_price');
            $table->string('category');
             $table->string('photo',255)->nullable();
            $table->boolean('available');
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
        Schema::dropIfExists('crudplats');
    }
};
