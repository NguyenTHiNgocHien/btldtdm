<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhuyenmai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedBigInteger('km_id')->autoIncrement();
            $table->string('km_ten')->comment('Tên của đợt khuyến mãi');
            $table->string('km_noidung')->comment('Nội dung của đợt khuyến mãi');
            $table->integer('km_giatri')->comment('Giá trị khuyến mãi');
            $table->dateTime('km_batdau')->comment('Ngày bắt đầu');
            $table->dateTime('km_ketthuc')->comment('Ngày kết thúc');
            $table->integer('km_trangthai')->comment('Trạng thái còn hay đã hêt');
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
        Schema::dropIfExists('khuyenmai');
    }
}
