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
        $tableName = config('filament-tenant.pivot_table');
        $foreign_key = config('filament-tenant.foreign_key');
        Schema::create($tableName, function (Blueprint $table) use ($foreign_key) {
            $table->id();
            $table->foreignId($foreign_key);
            $table->foreignId('user_id');
            $table->string('role')->nullable();
            $table->timestamps();

            $table->unique([$foreign_key, 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('filament-tenant.pivot_table'));
    }
};
