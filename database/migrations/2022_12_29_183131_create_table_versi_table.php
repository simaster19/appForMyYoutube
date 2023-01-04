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
        Schema::create('table_versi', function (Blueprint $table) {
            $table->id();
            $table->string('namaSc', 30);
            $table->string('versi', 5);
            $table->text('link');
            $table->text('message');
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_versi');
    }
};
