<?php

namespace App\Models\RelationPage;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperRelationElementThird
 */
class RelationElementThird extends Section
{
    /** @use HasFactory<\Database\Factories\RelationPage\RelationElementThirdFactory> */
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
