<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 21/08/2018
 * Time: 10:00 SA
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = [
        'first_name','last_name','email','phone','address','gender','age','intro'
    ];
}