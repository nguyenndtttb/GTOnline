<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuatgiaothongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luatgiaothong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HinhAnh');
            $table->string('PhuongTien');
            $table->string('TieuDe');
            $table->string('NoiDung');
            $table->bigInteger('MucPhat');
            $table->string('NghiDinh');
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
        Schema::dropIfExists('luatgiaothong');
    }
}
