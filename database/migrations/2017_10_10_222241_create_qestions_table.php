<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question',255);
            // The user who will receive a question request
            $table->unsignedInteger('user_id');
            // The user who ask the question
            $table->unsignedInteger('owner_id');
            // Is question asked anonymously
            $table->boolean('is_anonymously',true);
            // User Notified for Question Request
            $table->boolean('user_notified',false);
            // Question Owner Notified for Receiving Answer
            $table->boolean('owner_notified',false);

            $table->timestamps();

            $table->index('user_id');
            $table->index('owner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
