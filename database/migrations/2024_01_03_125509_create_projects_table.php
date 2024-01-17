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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constraint("users")->onDelete('cascade');
            $table->foreignId('superVisor_id')->constraint("users")->onDelete('cascade');
            $table->string('title');
            $table->string('delivery_date');
            $table->string('amenities');
            $table->string('type');
            $table->string('registration_number');
            $table->text('details');
            $table->string('price');
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
