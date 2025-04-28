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
        $tableName = config('filament-tenant.company_invitation_table_name');
        $foreign_key = config('filament-tenant.foreign_key');
        Schema::create($tableName, function (Blueprint $table) use ($foreign_key) {
            $table->id();
            $table->foreignId($foreign_key)->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->string('role')->nullable();
            $table->timestamps();

            $table->unique([$foreign_key, 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('filament-tenant.company_invitation_table_name'));
    }
};
