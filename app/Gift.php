<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = 'gifts';

    public function getGenderStringAttribute()
    {
        switch ($this->gender) {
            case 1:
                return 'Nam';
                break;
            case 2:
                return 'Nữ';
                break;
            case 0:
                return 'Tất cả';
                break;
            default:
                return 'Chưa xác định';
                break;
        }
    }

    public function getAgeStringAttribute()
    {
        switch ($this->age_range) {
            case 0:
                return 'Dành cho mọi lứa tuổi';
                break;
            case 1:
                return 'Dưới 6 tháng';
                break;
            case 2:
                return '6 - 12 tháng';
                break;
            case 3:
                return '12 -24 tháng';
                break;
            case 4:
                return 'Trên 24 tháng';
                break;
            default:
                return 'Chưa xác định';
                break;
        }
    }

    public function getCityNameAttribute()
    {
        switch ($this->city) {
            case 0:
                return 'Toàn quốc';
                break;
            case 1:
                return 'Hà Nội';
                break;
            case 2:
                return 'Đà Nẵng';
                break;
            case 3:
                return 'Nha Trang';
                break;
            case 4:
                return 'TP Hồ Chí Minh';
                break;
            default:
                return 'Chưa xác định';
                break;
        }
    }

    protected $fillable = [
        'account_id', 'category_id', 'name', 'description', 'images', 'age_range', 'gender', 'status'
    ];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function owner()
    {
        return $this->belongsTo('App\Transaction', 'owner_id');
    }

    public function buyer()
    {
        return $this->belongsTo('App\Transaction', 'buyer_id');
    }

}
