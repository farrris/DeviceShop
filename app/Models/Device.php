<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'img',
        'type_id',
        'brand_id'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function basket_devices()
    {
        return $this->hasMany(BasketDevice::class);
    }

    public function device_infos()
    {
        return $this->hasMany(DeviceInfo::class);
    }
}
