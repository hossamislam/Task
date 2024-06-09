<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function details()
    {
        return $this->hasMany(ServiceDetails::class, 'service_id');
    }
    public function image()
    {
        return $this->hasMany(ServiceSlider::class, 'service_id');
    }

}
