<?php

namespace App\Models\RelationPage;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RelationElementThird extends Section
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;

    /**
     * Get section type
     *
     * @return string
     */
    public function type(): string
    {
        return 'element-third';
    }
}
