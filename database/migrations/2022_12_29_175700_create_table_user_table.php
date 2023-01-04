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
        Schema::create('table_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_versi');
            $table->foreignId('id_shortlink');
            $table->string('username', 30)->unique();
            $table->string('ip', 30)->nullable();
            $table->text('userAgent')->nullable();
            $table->integer('expiredToken');
            $table->integer('count');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user');
    }
};
