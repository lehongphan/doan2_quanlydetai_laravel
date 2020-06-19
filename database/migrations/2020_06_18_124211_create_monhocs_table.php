<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monhocs', function (Blueprint $table) {
            $table->increments('MaMH');
            $table->unsignedInteger('maKhoa');
            $table->unsignedInteger('maNhomHP');
            $table->String('tenMH');
            $table->Integer('soTC');
            $table->Integer('soTietLT');
            $table->Integer('soTietTH');
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
        Schema::dropIfExists('monhocs');
    }
}
