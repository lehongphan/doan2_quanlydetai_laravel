<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detais', function (Blueprint $table) {
            $table->increments('maDeTai');
            $table->unsignedInteger('maGV');
            $table->String('tenDetai');
            $table->longText('thongTinDeTai');
            $table->boolean('trangThai')->default(False);            
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
        Schema::dropIfExists('detais');
    }
}
