<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PageArray\PageArrayTestValues;
use Database\Seeders\RelationPage\CreateRelationSections;
use Database\Seeders\RelationPage\RelationPageTestValues;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            // Page array
            PageArrayTestValues::class,
            // Relation page
            CreateRelationSections::class,
            RelationPageTestValues::class,
        ]);
    }
}
