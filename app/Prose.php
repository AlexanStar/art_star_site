<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prose extends Model
{
    //
    public function pages() {
        return $this->hasMany( Page::class, 'prose_id');
    }
}
