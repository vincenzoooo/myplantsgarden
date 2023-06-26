<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property id
 * @property name
 */
class Family extends Model
{
    use HasFactory;

    public function plants(): HasMany 
    {
        return $this->hasMany(Plant::class);
    }
}
