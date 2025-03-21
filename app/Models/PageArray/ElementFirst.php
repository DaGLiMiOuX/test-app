<?php

namespace App\Models\PageArray;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ElementFirst extends Section
{
    /** @use HasFactory<\Database\Factories\PageArray\ElementFirstFactory> */
    use HasFactory;

    public function type(): string
    {
        return 'element-first';
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
