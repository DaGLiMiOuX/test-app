<?php

namespace App\Models\PageArray;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageArray\PageFactory> */
    use HasFactory;

    public final const DEFAULT_ORDER = [
        'element-first',
        'element-second',
        'element-third',
    ];

    protected $casts = [
        'sections_order' => 'array'
    ];

    protected $appends = [
        'ordered_sections'
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['sections_order'] = json_encode(self::DEFAULT_ORDER);
    }

    public function firstElement(): HasOne
    {
        return $this->hasOne(ElementFirst::class);
    }

    public function secondElements(): HasMany
    {
        return $this->hasMany(ElementSecond::class);
    }

    public function thirdElement(): HasOne
    {
        return $this->hasOne(ElementThird::class);
    }

    public function withRelations(): Page
    {
        return $this->load([
            'firstElement',
            'secondElements',
            'thirdElement',
        ]);
    }

    public function getOrderedSectionsAttribute(): array
    {
        $this->withRelations();
        return collect($this->sections_order)
            ->mapWithKeys(function (string $type, $index): array {
            // ->map(function (string $type, $index): Section|Collection {
                $value = collect($this->getRelations())
                    ->firstOrFail(function ($section, string $relation) use ($type, &$index): bool {
                        // Replace result key
                        $index = $relation;
                        if ($section instanceof Collection) {
                            // Get related model class name
                            $model = $this->{$relation}()->getRelated();
                            // If collection is empty, get a new model instance, otherwise get first element
                            $section = $section->count() === 0 ? new $model() : $section->first();
                        }
                        // Return the first section that matches types with the sort array
                        return $section->type() === $type;
                    });
                return [$index => $value];
                // return $value;
            })
            ->toArray();
    }
}
