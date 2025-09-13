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
        Schema::create('teachers', function (Blueprint $table) {
             $table->id();
             $table->bigInteger('teacher_id')->unique()->nullable();
            $table->string('teacher_firstname');
            $table->string('teacher_lastname');
            $table->string('teacher_designation');
            $table->string('Gender');
            $table->string('email')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_teachers');
    }
};
