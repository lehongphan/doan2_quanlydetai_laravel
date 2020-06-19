<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophps', function (Blueprint $table) {
            $table->increments('maNhom');
            $table->unsignedInteger('maGV');
            $table->unsignedInteger('maMH');
            $table->unsignedInteger('nienKhoa');
            $table->Integer('hocKy');
            $table->Integer('siSoToiDa');
            $table->Integer('thu');
            $table->Integer('tietBD');
            $table->Integer('soTiet');          
            $table->string('phong');
            $table->boolean('trangThai')->default(true);            
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
        Schema::dropIfExists('lophps');
    }
}
