<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
