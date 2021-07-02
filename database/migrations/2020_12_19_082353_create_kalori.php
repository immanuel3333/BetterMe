<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKalori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaloris', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->foreignId('user_id');
            $table->integer('jumlah_kalori');
            $table->dateTime('created_at', 0);
            $table->dateTime('updated_at', 0);
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kaloris');
    }
}
