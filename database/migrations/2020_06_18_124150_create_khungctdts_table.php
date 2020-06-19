<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhungctdtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khungctdts', function (Blueprint $table) {
            $table->unsignedInteger('maMH');
            $table->Integer('khoa')->unsigned();
            $table->unsignedInteger('maCN');
            $table->String('nhomTC');     
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
        Schema::dropIfExists('khungctdts');
    }
}
