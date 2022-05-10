<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_configurations', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('key');
            $table->string('type',100);
            $table->string('default',100);
            $table->string('value',100);
            $table->timestamps();
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('category_configuration_keys');

            $table->foreign('key')->references('name')->on('category_configuration_keys');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_configurations');
    }
}
