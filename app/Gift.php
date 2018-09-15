<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Gift extends Model
{
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'gifts.name' => 10,
            'users.username' => 7,
            'categories.name' => 7,
            'gifts.city' => 5,
        ],
        'joins' => [
            'users' => ['gifts.account_id','users.id'],
            'categories' => ['gifts.category_id','categories.id'],
        ],
    ];
    protected $table = 'gifts';

    public function account()
    {
        return $this->hasOne('\App\User', 'id', 'account_id');
    }

    public function category()
    {
        return $this->hasOne('\App\Category', 'id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany('\App\Images');
    }

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
            case 5:
                return 'An Giang';
                break;
            case 6:
                return 'Bà Rịa - Vũng Tàu';
                break;
            case 7:
                return 'Bắc Giang';
                break;
            case 8:
                return 'Bắc Kạn';
                break;
            case 9:
                return 'Bạc Liêu';
                break;
            case 10:
                return 'Bắc Ninh';
                break;
            case 11:
                return 'Bến Tre';
                break;
            case 12:
                return 'Bình Định';
                break;
            case 13:
                return 'Bình Dương';
                break;
            case 14:
                return 'Bình Phước';
                break;
            case 15:
                return 'Bình Thuận';
                break;
            case 16:
                return 'Cà Mau';
                break;
            case 17:
                return 'Cần Thơ';
                break;
            case 18:
                return 'Cao Bằng';
                break;
            case 19:
                return 'Đắk Lắk';
                break;
            case 20:
                return 'Đắk Nông';
                break;
            case 21:
                return 'Điện Biên';
                break;
            case 22:
                return 'Đồng Nai';
                break;
            case 23:
                return 'Đồng Tháp';
                break;
            case 24:
                return 'Gia Lai';
                break;
            case 25:
                return 'Hà Giang';
                break;
            case 26:
                return 'Hà Nam';
                break;
            case 27:
                return 'Hà Tĩnh';
                break;
            case 28:
                return 'Hải Dương';
                break;
            case 29:
                return 'Hải Phòng';
                break;
            case 30:
                return 'Hậu Giang';
                break;
            case 31:
                return 'Hòa Bình';
                break;
            case 32:
                return 'Hưng Yên';
                break;
            case 33:
                return 'Khánh Hòa';
                break;
            case 34:
                return 'Kiên Giang';
                break;
            case 35:
                return 'Kon Tum';
                break;
            case 36:
                return 'Lai Châu';
                break;
            case 37:
                return 'Lâm Đồng';
                break;
            case 38:
                return 'Lạng Sơn';
                break;
            case 39:
                return 'Lào Cai';
                break;
            case 41:
                return 'Long An';
                break;
            case 42:
                return 'Nam Định';
                break;
            case 43:
                return 'Nghệ An';
                break;
            case 44:
                return 'Ninh Bình';
                break;
            case 45:
                return 'Ninh Thuận';
                break;
            case 46:
                return 'Phú Thọ';
                break;
            case 47:
                return 'Phú Yên';
                break;
            case 48:
                return 'Quảng Bình';
                break;
            case 49:
                return 'Quảng Nam';
                break;
            case 50:
                return 'Quảng Ngãi';
                break;
            case 51:
                return 'Quảng Ninh';
                break;
            case 52:
                return 'Quảng Trị';
                break;
            case 53:
                return 'Sóc Trăng';
                break;
            case 54:
                return 'Sơn La';
                break;
            case 55:
                return 'Tây Ninh';
                break;
            case 56:
                return 'Thái Bình';
                break;
            case 57:
                return 'Thái Nguyên';
                break;
            case 58:
                return 'Thanh Hóa';
                break;
            case 59:
                return 'Thừa Thiên Huế';
                break;
            case 60:
                return 'Tiền Giang';
                break;
            case 61:
                return 'Trà Vinh';
                break;
            case 62:
                return 'Vĩnh Long';
                break;
            case 63:
                return 'Vĩnh Phúc';
                break;
            case 64:
                return 'Yên Bái';
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
