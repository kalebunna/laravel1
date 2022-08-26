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
        Schema::table('kelass', function (Blueprint $table) {
            $table->unsignedBigInteger("teacher_id")->after("nama_kelas")->nullable();
            $table->foreign("teacher_id")->references('id')->on('teachers')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('column_to_kelas', function (Blueprint $table) {
            //
        });
    }
};
