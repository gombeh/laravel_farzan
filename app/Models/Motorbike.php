<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Motorbike extends Model
{
    use HasFactory;
    protected $fillable = ['color', 'weight', 'model', 'image_path', 'price'];
    /**
     * Get the user's first name.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => Storage::url($this->image_path),
        );
    }
}
