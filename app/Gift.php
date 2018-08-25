<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = 'gifts';
    public $timestamps = true;

    public function account() {
        return $this->hasOne('\App\Account', 'id', 'account_id');
    }

    public function category() {
        return $this->hasOne('\App\Category', 'id', 'category_id');
    }
}
