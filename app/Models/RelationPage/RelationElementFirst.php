<?php

namespace App\Models\RelationPage;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperRelationElementFirst
 */
class RelationElementFirst extends Section
{
    /** @use HasFactory<\Database\Factories\RelationPage\RelationElementFirstFactory> */
    use HasFactory;

    /**
     * Get section type
     *
     * @return string
     */
    public function type(): string
    {
        return 'element-first';
    }
}
