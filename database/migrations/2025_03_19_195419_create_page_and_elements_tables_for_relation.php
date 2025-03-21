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
        Schema::create('relation_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('relation_sections', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('name');
            $table->boolean('is_sortable')->default('true');
            $table->timestamps();
        });

        Schema::create('relation_page_relation_section', function (Blueprint $table) {
            $table->foreignId('relation_page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('relation_section_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->unsignedSmallInteger('order');
            // Uniqueness between sections and pages - Only one page can have one section ID
            $table->unique(['relation_page_id', 'relation_section_id']);
            // Uniqueness between ordering and pages - Only one page can have one order index
            $table->unique(['relation_page_id', 'order']);
        });
        
        Schema::create('relation_element_firsts', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->foreignId('relation_page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('relation_element_seconds', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->unsignedSmallInteger('order');
            $table->foreignId('relation_page_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('relation_element_thirds', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->string('title');
            $table->string('description');
            $table->string('another_field');
            $table->foreignId('relation_page_id')
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
        Schema::dropIfExists('relation_pages');
        Schema::dropIfExists('relation_sections');
        Schema::dropIfExists('relation_pages_sections');
        Schema::dropIfExists('relation_element_firsts');
        Schema::dropIfExists('relation_element_seconds');
        Schema::dropIfExists('relation_element_thirds');
    }
};
