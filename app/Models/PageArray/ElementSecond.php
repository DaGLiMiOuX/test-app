<?php

namespace App\Models\PageArray;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ElementSecond extends Section
{
    /** @use HasFactory<\Database\Factories\PageArray\ElementSecondFactory> */
    use HasFactory;

    public function type(): string
    {
        return 'element-second';
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
