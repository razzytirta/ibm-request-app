<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_permintaan', 100);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('depo_id');
            $table->string('keterangan');
            $table->date('tanggal');
            $table->enum('Pending Approval', ['Approved', 'Pending Approval', 'Rejected']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('depo_id')->references('id')->on('depo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
