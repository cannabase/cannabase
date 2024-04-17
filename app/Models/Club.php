<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users(): hasMany
    {
        return $this->hasMany(User::class);
    }

    public function adress(): hasOne
    {
        return $this->hasOne(ClubAddress::class);
    }
}
