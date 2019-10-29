<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property int $id
 * @property string $text
 * @property int $book_id
 * @property int $prose_id
 * @property int $poems_id
 * @property int $order_page
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Book $book
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Picture[] $picture
 * @property-read int|null $picture_count
 * @property-read \App\Poems $poems
 * @property-read \App\Prose $prose
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereOrderPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page wherePoemsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereProseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    //
    public function picture() {
        return $this->hasMany( Picture::class, "page_id");
    }
    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function poems() {
        return $this->belongsTo(Poems::class, 'poems_id');
    }
    public function prose() {
        return $this->belongsTo(Prose::class, 'prose_id');
    }
}
