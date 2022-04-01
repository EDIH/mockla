<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BlockTemplateRepeaterIteration
 *
 * @property int $id
 * @property int $block_template_repeater_id
 * @property int $iterable_id
 * @property string $iterable_type
 * @property int $order
 * @property int|null $admin_created_id
 * @property int|null $admin_updated_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BlockContent[] $contents
 * @property-read int|null $contents_count
 * @property-read \Illuminate\Database\Eloquent\Collection|BlockTemplateRepeaterIteration[] $iterations
 * @property-read int|null $iterations_count
 * @property-read \App\Models\BlockTemplateRepeater|null $repeater
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlockTemplateRepeaterIteration onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereAdminCreatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereAdminUpdatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereBlockTemplateRepeaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereIterableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereIterableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockTemplateRepeaterIteration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlockTemplateRepeaterIteration withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlockTemplateRepeaterIteration withoutTrashed()
 * @mixin \Eloquent
 */
class BlockTemplateRepeaterIteration extends Model
{
    use HasFactory, HasSystemFields, SoftDeletes;

    protected $fillable = [
        'block_template_repeater_id',
        'order'
    ];


    // PROPERTIES CONTENT

    /**
     * @return MorphMany
     */
    public function contents(): MorphMany
    {
        return $this
            ->morphMany(BlockContent::class, 'contentable');
//            ->hasMany(Block_contents::class,'block_template_repeater_iteration_id', 'id');
    }

    public function mappedByKey ()
    {
        $contents = $this
            ->contents()
            ->with('translations')
            ->get()
            ->mapWithKeys(function ($content) {
            return [$content->block_template_attribute_id => $content];
        });

        return $this
            ->repeater
            ->attrs
            ->mapWithKeys(function($attr) use ($contents) {
                $value = $contents[$attr->id]->translate ?? $attr;
                return [$attr->key => $value];
            });
    }

    // PROPERTY TEMPLATE

    /**
     * @return HasOne
     */
    public function repeater(): HasOne
    {
        return $this
            ->hasOne(BlockTemplateRepeater::class, 'id', 'block_template_repeater_id')
            ;
    }

    // PROPERTIES ITERATIONS

    /**
     * @return MorphMany
     */
    public function iterations(): MorphMany
    {
        return $this->morphMany(BlockTemplateRepeaterIteration::class, 'iterable');
    }
}
