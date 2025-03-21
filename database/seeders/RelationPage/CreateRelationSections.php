<?php

namespace Database\Seeders\RelationPage;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRelationSections extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relation_sections')
            ->insertOrIgnore([
                [
                    'key' => 'RELATION_ELEMENT_FIRST',
                    'name' => 'relation-element-first',
                    'is_sortable' => true,
                ],
                [
                    'key' => 'RELATION_ELEMENT_SECOND',
                    'name' => 'relation-element-second',
                    'is_sortable' => false,
                ],
                [
                    'key' => 'RELATION_ELEMENT_THIRD',
                    'name' => 'relation-element-third',
                    'is_sortable' => true,
                ],
            ]);
    }
}
