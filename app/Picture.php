<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    public function pages() {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
