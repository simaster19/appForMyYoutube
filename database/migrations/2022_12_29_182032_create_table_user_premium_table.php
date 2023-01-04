<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_premium', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_versi');
            $table->string('username', 30);
            $table->text('pass');
            $table->dateTime('created_at', 0);
            $table->dateTime('expired_at', 0);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_premium');
    }
};
