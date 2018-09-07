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


    protected $fillable = [
        'owner_id', 'buyer_id', 'gift_id', 'status'
    ];

    public function getStatusStringAttribute()
    {
        switch ($this->status) {
            case -1:
                return 'Hủy';
                break;
            case 0:
                return 'Đang chờ người xin';
                break;
            case 1:
                return 'Đang chờ xác nhận';
                break;;
            case 2:
                return 'Đang trao đổi';
                break;
            case 3:
                return 'Hoàn thành';
                break;
            default:
                return 'Chưa xác định';
                break;
        }
    }

    public function owner()
    {
        return $this->hasOne('\App\User', 'id', 'owner_id');
    }

    public function buyer()
    {
        return $this->hasOne('\App\User', 'id', 'buyer_id');
    }

    public function gift()
    {
        return $this->belongsTo('\App\Gift');
    }

}