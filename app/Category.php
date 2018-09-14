<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Category extends Model
{
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'id' => 2,
            'name' => 10,
        ],
    ];
    protected $table = 'categories';

    protected $fillable = [
        'name', 'description', 'thumbnail', 'status'
    ];
}
