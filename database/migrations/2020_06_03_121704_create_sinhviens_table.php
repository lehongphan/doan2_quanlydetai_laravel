<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->increments('maSV');
            $table->unsignedInteger('maLop');
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
        Schema::dropIfExists('sinhviens');
    }
}
