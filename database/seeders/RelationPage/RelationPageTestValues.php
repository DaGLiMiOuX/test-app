<?php

namespace Database\Seeders\RelationPage;

use App\Models\RelationPage\RelationPage;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationPageTestValues extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            return RelationPage::factory()
                ->hasFirstElement()
                ->hasSecondElements(rand(0, 6), new Sequence(
                    fn(Sequence $sequence) => ['order' => $sequence->index]
                ))
                ->hasThirdElement()
                ->create();
        });
    }
}
