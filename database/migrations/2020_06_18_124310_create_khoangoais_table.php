<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoangoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giangviens', function($table) {
            $table->foreign('maKhoa')->references('maKhoa')->on('khoas');
            $table->foreign('maHV')->references('maHV')->on('hocvis');
          });
        Schema::table('sinhviens', function($table) {
            $table->foreign('maLop')->references('maLop')->on('lopchuyennganhs');
        });
        Schema::table('chuyennganhs', function($table) {
            $table->foreign('maNganh')->references('maNganh')->on('nganhs');
        });
        Schema::table('lopchuyennganhs', function($table) {            
            $table->foreign('maCN')->references('maCN')->on('chuyennganhs');
            $table->foreign('khoa')->references('khoa')->on('khoahocs');
        });
        Schema::table('cvhts', function($table) {
            $table->foreign('maLop')->references('maLop')->on('lopchuyennganhs');
            $table->foreign('maGV')->references('maGV')->on('giangviens');
        });
        Schema::table('lophps', function($table) {
            $table->foreign('maGV')->references('maGV')->on('giangviens');
            $table->foreign('maMH')->references('maMH')->on('monhocs');
        });
        Schema::table('kehoachhoctaps', function($table) {
            $table->foreign('maSV')->references('maSV')->on('sinhviens'); 
            $table->foreign('maMH')->references('maMH')->on('monhocs');
            $table->foreign('maHK')->references('maHK')->on('hockys'); 
            $table->foreign('maNK')->references('maNK')->on('nienkhoas');   
        });
        
       
        Schema::table('montienquyets', function($table) {
            $table->foreign('maMH')->references('maMH')->on('monhocs');
        });
        Schema::table('khungctdts', function($table) {
            $table->foreign('khoa')->references('khoa')->on('khoahocs');
            $table->foreign('maCn')->references('maCN')->on('chuyennganhs');
            $table->foreign('maMH')->references('maMH')->on('monhocs');
        });
        Schema::table('bcnkhoas', function($table) {
            $table->foreign('maGV')->references('maGV')->on('giangviens');
            $table->foreign('maCV')->references('maCV')->on('chucvus');
            $table->foreign('maKhoa')->references('maKhoa')->on('khoas');
        });
        Schema::table('nganhs', function($table) {
            $table->foreign('maKhoa')->references('maKhoa')->on('khoas');
        });
        Schema::table('diemhps', function($table) {
            $table->foreign('maSV')->references('maSV')->on('sinhviens');
            $table->foreign('maNhom')->references('maNhom')->on('lophps');
        });
        Schema::table('detais', function($table) {
            $table->foreign('maGV')->references('maGV')->on('giangviens');
        });
        Schema::table('dangkydetais', function($table) {
            $table->foreign('maDeTai')->references('maDeTai')->on('detais');
            $table->foreign('maGV')->references('maGV')->on('giangviens');
            $table->foreign('maSV')->references('maSV')->on('sinhviens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khoangoais');
    }
}
