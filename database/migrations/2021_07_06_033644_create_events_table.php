<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->text('title')->nullable();          
            $table->text('title_html')->nullable();
            $table->text('description_title')->nullable();
            $table->text('description')->nullable();
            $table->text('image');
            $table->text('order')->nullable();
            $table->text('status')->nullable();
            $table->text('link')->nullable();            
            $table->text('other')->nullable();
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
        Schema::dropIfExists('events');
    }
}
