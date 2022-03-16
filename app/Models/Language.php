<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $iso
 * @property int $enabled
 * @property int|null $admin_created_id
 * @property int|null $admin_updated_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PageProperty[] $pages
 * @property-read int|null $pages_count
 * @method static \Illuminate\Database\Eloquent\Builder|Language current()
 * @method static \Illuminate\Database\Eloquent\Builder|Language enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereAdminCreatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereAdminUpdatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Language extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'iso',
        'enabled',
    ];

    public function scopeEnabled($query) {
        return $query->where('enabled', true);
    }

    public function scopeCurrent($query) {
        return $query->where('iso', App::getLocale());
    }

    /**
     * @return HasMany
     */
    public function pages():HasMany
    {
        return $this->hasMany(PageProperty::class, 'lang_id');
    }
}
