<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessVertical extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'bottom_bullets' => 'array',
    ];

    protected function banner(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/business-verticals/' . $value) : null
        );
    }

    protected function aboutImage1(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/business-verticals/' . $value) : null
        );
    }

    protected function aboutImage2(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/business-verticals/' . $value) : null
        );
    }

    protected function videoImage(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/business-verticals/' . $value) : null
        );
    }
}
