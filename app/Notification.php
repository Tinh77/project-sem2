<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 21/08/2018
 * Time: 10:01 SA
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    public function transaction() {
        return $this->hasOne('App\Transaction', 'id', 'transaction_id');
    }

    protected $fillable = [
        'transaction_id', 'confirmed'
    ];
}