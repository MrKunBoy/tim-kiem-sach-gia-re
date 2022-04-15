<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table='shops';
    protected $guarded = [''];

    protected $fillable = [
        'name',
        'link',
        'description',
        'content',
        'thumb',
        'slug',
        'active_home',
        'active'
    ];

    public function coupons()
    {
        return $this->hasMany(Coupon::class,'shop_id','id');
    }
}
