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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->json('sections_order');
            $table->timestamps();
        });

        Schema::create('element_firsts', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->foreignId('page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('element_seconds', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->unsignedSmallInteger('order');
            $table->foreignId('page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('element_thirds', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->foreignId('page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page');
        Schema::dropIfExists('element_firsts');
        Schema::dropIfExists('element_seconds');
        Schema::dropIfExists('element_thirds');
    }
};
