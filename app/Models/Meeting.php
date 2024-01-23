<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Meeting extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'projectable_id',
        'projectable_type',
        'title',
        'purpose',
        'meeting_date',
        'status',
    ];

    public function projectable(): MorphTo
    {
        return $this->morphTo();
    }
}
