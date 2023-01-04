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
        Schema::create('table_sourcecode', function (Blueprint $table) {
            $table->id();
            $table->string('namaSc', 30);
            $table->string('namaApkWeb', 100);
            $table->text('linkYt');
            $table->string('status', 30);
            $table->date('created_at');
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
        Schema::dropIfExists('table_sourcecode');
    }
};
