<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giftlists', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('spec_id')->default(0);
          $table->integer('type');
          $table->boolean('public');
          $table->date('date');
          $table->string('description');
          $table->rememberToken();
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
        Schema::dropIfExists('giftlists');
    }
}
