<?php

namespace App\Models\RelationPage;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperRelationElementSecond
 */
class RelationElementSecond extends Section
{
    /** @use HasFactory<\Database\Factories\RelationPage\RelationElementSecondFactory> */
    use HasFactory;

    /**
     * Get section type
     *
     * @return string
     */
    public function type(): string
    {
        return 'element-second';
    }
}
