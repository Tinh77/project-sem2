<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function gift() {
        return $this->belongsTo('\App\Gift');
    }

    protected $table = 'images';
}
