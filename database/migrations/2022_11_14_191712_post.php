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
        // Necesitaremos: ID/TITLE/CONTENT

        Schema::create('post', function(Blueprint $table) {

            $table->id();
            $table->string('title', 250);
            $table->text('content');

        }
            
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('post');
    }
};
