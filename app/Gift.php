<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = 'gifts';

    public function account() {
        return $this->hasOne('\App\User', 'id', 'account_id');
    }

    public function category() {
        return $this->hasOne('\App\Category', 'id', 'category_id');
    }

    protected $fillable = [
        'account_id', 'category_id', 'name', 'description', 'images', 'age_range', 'gender', 'status'
    ];
}
