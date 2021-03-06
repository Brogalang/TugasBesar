<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsultanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('alamat', 100);
            $table->string('jasa', 50);
            $table->string('email', 50);
            $table->string('tarif', 50)->nullable();
            $table->string('tentang', 300)->nullable();
            $table->BigInteger('rating')->nullable()->unsigned();
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
        //Schema::dropIfExists('konsultan');
    }
}
