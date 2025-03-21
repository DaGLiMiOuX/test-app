<?php

namespace App\Models\RelationPage;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RelationSection extends Model
{
    public function relationPages(): BelongsToMany
    {
        return $this->belongsToMany(RelationPage::class);
    }
}
