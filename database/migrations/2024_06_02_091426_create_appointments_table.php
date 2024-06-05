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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_number')->nullable()->unique();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('appointment_status')->nullable();
            //client id has relationship with client table with no delete on cascade
            $table->string('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('no action');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
};
