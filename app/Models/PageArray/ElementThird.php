<?php

namespace App\Models\PageArray;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ElementThird extends Section
{
    /** @use HasFactory<\Database\Factories\PageArray\ElementThirdFactory> */
    use HasFactory;

    public function type(): string
    {
        return 'element-third';
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
