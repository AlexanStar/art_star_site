<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Picture
 *
 * @property int $id
 * @property string $url_way_to_picture
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Page $pages
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Picture whereUrlWayToPicture($value)
 * @mixin \Eloquent
 */
class Picture extends Model
{
    //
    public function pages() {
        return $this->belongsTo(Page::class, 'page_id');
    }
    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
