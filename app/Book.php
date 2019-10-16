<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function pages() {
        return $this->hasMany( Page::class, 'book_id');
    }
}
