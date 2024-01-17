<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'delivery_date',
        'price',
        'type',
        'registration_number',
        'amenities',
        'status',
    ];

    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
