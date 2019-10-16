<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poems extends Model
{
    //

    public function pages() {
        return $this->hasMany( Page::class, 'poems_id');
    }


}
