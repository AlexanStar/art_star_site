<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Prose
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $date_of_writing
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Page[] $pages
 * @property-read int|null $pages_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereDateOfWriting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Prose whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prose extends Model
{
    //
    public function pages() {
        return $this->hasMany( Page::class, 'prose_id');
    }
}
