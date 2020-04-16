<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('bn_id');
            $table->string('bn_hinhanh');
            $table->string('bn_tieude');
            $table->string('bn_tieudephu');
            $table->string('bn_noidung');
            $table->bigInteger('km_id');
            $table->foreign('km_id')->references('km_id')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('bn_trangthai');
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
        Schema::dropIfExists('banner');
    }
}
