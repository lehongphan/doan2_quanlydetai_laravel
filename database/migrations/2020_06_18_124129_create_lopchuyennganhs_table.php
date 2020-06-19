<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopchuyennganhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lopchuyennganhs', function (Blueprint $table) {
            $table->increments('maLop');
            $table->unsignedInteger('maCN');
            $table->Integer('khoa')->unsigned();           
            $table->string('nhiemKy');
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
        Schema::dropIfExists('lopchuyennganhs');
    }
}
