<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("member_id")->constrained("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("category_id")->constrained("categories")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("name");
            $table->text("description");
            $table->unsignedFloat("price");
            $table->string("currency",3);
            $table->string("made_country");
            $table->string("image");
            $table->unsignedSmallInteger("rating")->default(0);
            $table->string("status");
            $table->unsignedSmallInteger("number_of_available_pieces");
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
        Schema::dropIfExists('items');
    }
}
