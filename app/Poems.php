<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Poems
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Page[] $pages
 * @property-read int|null $pages_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poems whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Poems extends Model
{
    //

    public function pages() {
        return $this->hasMany( Page::class, 'poems_id');
    }


}
