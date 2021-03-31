<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsekuensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsekuensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nilai', 200);
            $table->string('konsekuensi', 200);
            $table->string('financial')->default('text');
            $table->string('objective')->default('text');
            $table->string('legal')->default('text');
            $table->string('biaya')->default('text');
            $table->string('reputasi')->default('text');
            $table->string('cakupan', 200)->nullable()->default('text');
            $table->string('lama_pemulihan', 200)->nullable()->default('text');
            $table->string('lama_penyimpangan', 200)->nullable()->default('text');
            $table->string('product_image', 200)->nullable()->default('text');
            $table->string('dampak_sosial', 200)->nullable()->default('text');
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
        Schema::dropIfExists('konsekuensi');
    }
}
