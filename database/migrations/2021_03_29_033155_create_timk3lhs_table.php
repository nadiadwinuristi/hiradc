<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimk3lhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timk3lh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unit_kerja', 200);
            $table->string('koordinator', 200);
            $table->string('email_koordinator', 200);
            $table->string('ketua', 200);
            $table->string('email_ketua', 200);
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
        Schema::dropIfExists('timk3lh');
    }
}
