<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table-> string('title') -> unique();
            $table-> string('slug');
            $table-> text('body');
            $table-> unsignedInteger('view') -> default(0);
            $table-> unsignedInteger('answer') -> default(0);
            $table-> Integer('vote') -> default(0);
            $table-> unsignedInteger('answer_id') -> nullable();
            $table-> unsignedInteger('user_id');
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
        Schema::dropIfExists('questions');
    }
}
