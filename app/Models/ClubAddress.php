<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClubAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id',
        'official_name',
        'street',
        'city',
        'housenumber',
        'zip'
    ];


    protected function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}
