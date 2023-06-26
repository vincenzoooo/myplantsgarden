<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property id
 * @property name
 * @property description
 * @property user_id
 * @property family_id
 */
class Plant extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'user_id',
        'family_id',
    ];

    public function family(): HasOne
    {
        return $this->hasOne(Family::class);
    }
}
