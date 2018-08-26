<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 21/08/2018
 * Time: 10:01 SA
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function owner() {
        return $this->hasOne('\App\Account', 'id', 'owner_id');
    }

    public function buyer() {
        return $this->hasOne('\App\Account', 'id', 'buyer_id');
    }

    public function gift() {
        return $this->hasOne('\App\Gift', 'id', 'gift_id');
    }

    protected $fillable = [
        'owner_id', 'buyer_id', 'gift_id', 'status'
    ];
}