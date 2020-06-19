<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiangviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giangviens', function (Blueprint $table) {
            $table->increments('maGV');
            $table->unsignedInteger('maKhoa');
            $table->unsignedInteger('maHH');
            $table->unsignedInteger('maHV');
            $table->string('hoLot');
            $table->string('ten');
            $table->date('ngaySinh');
            $table->string('gioiTinh');
            $table->string('email')->unique();
            $table->longText('queQuan');
            $table->string('password');
            $table->boolean('is_gv')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('giangviens');
    }
}
