<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('nv_id');
            $table->string('username');
            $table->string('password');
            //Khóa ngoại đây
            $table->bigInteger('q_id')->unsigned();//khóa ngoại
            $table->foreign('q_id')->references('q_id')->on('quyen');
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
        Schema::dropIfExists('table_nhanvien');
    }
}
