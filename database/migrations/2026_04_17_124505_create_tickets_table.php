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
        Schema::create('tickets', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete();
    $table->foreignId('agent_id')->nullable()->constrained('users')->nullOnDelete();
    $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
    $table->foreignId('priority_id')->constrained()->restrictOnDelete();
    $table->foreignId('status_id')->constrained()->restrictOnDelete();
    $table->softDeletes();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
