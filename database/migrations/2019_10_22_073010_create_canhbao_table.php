<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanhbaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canhbao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tenduong');
            $table->string('kinhdo');
            $table->string('vido');
            $table->text('hinhanh');
            $table->text('tieude');
            $table->text('tinhtrang');
            $table->text('nguontin');
            $table->text('diadiem');
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
        Schema::dropIfExists('canhbao');
    }
}
