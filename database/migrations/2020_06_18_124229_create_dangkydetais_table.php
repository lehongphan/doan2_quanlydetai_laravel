<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangkydetaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangkydetais', function (Blueprint $table) {
            $table->increments('maDangKyDT');
            $table->unsignedInteger('maDeTai');
            $table->unsignedInteger('maGV');
            $table->unsignedInteger('maSV');            
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
        Schema::dropIfExists('dangkydetais');
    }
}
