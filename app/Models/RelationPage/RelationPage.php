<?php

namespace App\Models\RelationPage;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

/**
 * @mixin IdeHelperRelationPage
 */
class RelationPage extends Model
{
    /** @use HasFactory<\Database\Factories\RelationPage\RelationPageFactory> */
    use HasFactory;

    public final const DEFAULT_ORDER = [
        'RELATION_ELEMENT_FIRST',
        'RELATION_ELEMENT_SECOND',
        'RELATION_ELEMENT_THIRD',
    ];

    public final const SECTION_RELATION = [
        'RELATION_ELEMENT_FIRST' => 'firstElement',
        'RELATION_ELEMENT_SECOND' => 'secondElements',
        'RELATION_ELEMENT_THIRD' => 'thirdElement',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function (RelationPage $relationPage): void {
            collect(static::DEFAULT_ORDER)
                ->each(fn($key, $i) => $relationPage->relationSections()->attach(RelationSection::where('key', $key)->firstOrFail(), ['order' => $i]));
        });
    }

    protected $appends = [
        'ordered_sections'
    ];

    public function relationSections(): BelongsToMany
    {
        return $this->belongsToMany(RelationSection::class);
    }

    public function firstElement(): HasOne
    {
        return $this->hasOne(RelationElementFirst::class);
    }

    public function secondElements(): HasMany
    {
        return $this->hasMany(RelationElementSecond::class)->orderBy('order');
    }

    public function thirdElement(): HasOne
    {
        return $this->hasOne(RelationElementThird::class);
    }

    public function withRelations(): RelationPage
    {
        return $this->load([
            'firstElement',
            'secondElements',
            'thirdElement',
        ]);
    }

    public function getOrderedSectionsAttribute(): array
    {
        return $this->withRelations()
            ->relationSections()
            ->where('is_sortable', '=', true)
            ->orderByPivot('order')
            ->get()
            ->mapWithKeys(fn($section): array => [static::SECTION_RELATION[$section->key] => $this->{static::SECTION_RELATION[$section->key]}])
            // ->map(fn($section): Section|Collection => $this->{static::SECTION_RELATION[$section->key]})
            ->toArray();
    }
}
