<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

protected $fillable = [
    'city_id', 'body',
];

public function getCityNameAttribute()
{
    return config('city'. $this->city_id);
}

public function scopeSearchFilter($query, string $search = null)
{
    if (!$search) {
        return $query;
    }

    return $query->where('title', 'LIKE', "%{$search}%")
    ->orWhere('body', 'LIKE', "%{$search}%");
}

public function scopePrefFilter($query, string $city = null)
{
    if (!$city) {
        return $query;
    }

    return $query->where('city_id', $city);
}

}