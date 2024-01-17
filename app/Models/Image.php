<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'file_name',
        'file_path',
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }
    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
