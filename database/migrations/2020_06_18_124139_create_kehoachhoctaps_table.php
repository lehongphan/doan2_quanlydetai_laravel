<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehoachhoctapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehoachhoctaps', function (Blueprint $table) {
            $table->unsignedInteger('maSV');            
            $table->unsignedInteger('maMH');   
            $table->unsignedInteger('maHK');
            $table->unsignedInteger('maNK');          
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
        Schema::dropIfExists('kehoachhoctaps');
    }
}
