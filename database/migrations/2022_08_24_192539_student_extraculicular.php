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
        Schema::create('Student_extraculicular', function (Blueprint $table) {
            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references('id')->on('students')->onDelete('restrict');
            $table->unsignedBigInteger("extraculicular_id");
            $table->foreign("extraculicular_id")->references('id')->on('extraculiculers')->onDelete('restrict');
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
        Schema::dropIfExists('Student_extraculicular');
    }
};
