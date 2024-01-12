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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('addressable_id');
            $table->string('addressable_type')->comment('user, project');
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();
            $table->string('pin');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
