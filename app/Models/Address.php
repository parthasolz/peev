<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'addressable_id',
        'addressable_type',
        'address_line_1',
        'address_line_2',
        'pin',
        'city',
        'state',
        'country',
        'description',
        'status',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
