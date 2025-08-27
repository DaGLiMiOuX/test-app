<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\PageArray{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PageArray\Page $page
 * @method static \Database\Factories\PageArray\ElementFirstFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementFirst whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperElementFirst {}
}

namespace App\Models\PageArray{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $order
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PageArray\Page $page
 * @method static \Database\Factories\PageArray\ElementSecondFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementSecond whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperElementSecond {}
}

namespace App\Models\PageArray{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PageArray\Page $page
 * @method static \Database\Factories\PageArray\ElementThirdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ElementThird whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperElementThird {}
}

namespace App\Models\PageArray{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property array<array-key, mixed> $sections_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PageArray\ElementFirst|null $firstElement
 * @property-read array $ordered_sections
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PageArray\ElementSecond> $secondElements
 * @property-read int|null $second_elements_count
 * @property-read \App\Models\PageArray\ElementThird|null $thirdElement
 * @method static \Database\Factories\PageArray\PageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereSectionsOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPage {}
}

namespace App\Models\RelationPage{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $relation_page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RelationPage\RelationElementFirstFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereRelationPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementFirst whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRelationElementFirst {}
}

namespace App\Models\RelationPage{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $order
 * @property int $relation_page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RelationPage\RelationElementSecondFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereRelationPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementSecond whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRelationElementSecond {}
}

namespace App\Models\RelationPage{
/**
 * 
 *
 * @property int $id
 * @property bool $show
 * @property string $title
 * @property string $description
 * @property string $another_field
 * @property int $relation_page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RelationPage\RelationElementThirdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereAnotherField($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereRelationPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationElementThird whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRelationElementThird {}
}

namespace App\Models\RelationPage{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\RelationPage\RelationElementFirst|null $firstElement
 * @property-read array $ordered_sections
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelationPage\RelationSection> $relationSections
 * @property-read int|null $relation_sections_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelationPage\RelationElementSecond> $secondElements
 * @property-read int|null $second_elements_count
 * @property-read \App\Models\RelationPage\RelationElementThird|null $thirdElement
 * @method static \Database\Factories\RelationPage\RelationPageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationPage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRelationPage {}
}

namespace App\Models\RelationPage{
/**
 * 
 *
 * @property int $id
 * @property string $key
 * @property string $name
 * @property bool $is_sortable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RelationPage\RelationPage> $relationPages
 * @property-read int|null $relation_pages_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereIsSortable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RelationSection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRelationSection {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

