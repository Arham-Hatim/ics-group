<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'social_links' => 'array',
    ];

    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/logo/' . $value) : null
        );
    }

    protected function whiteLogo(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/logo/' . $value) : null
        );
    }

    protected function favicon(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/logo/' . $value) : null
        );
    }
}

