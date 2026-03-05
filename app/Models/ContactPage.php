<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected function banner(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/contact/' . $value) : null
        );
    }

    protected function supportImage(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/contact/' . $value) : null
        );
    }
}
