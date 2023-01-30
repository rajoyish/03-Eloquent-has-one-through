<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mechanic(): HasOne
    {
        return $this->hasOne(Mechanic::class);
    }

    public function owner(): HasOne
    {
        return $this->hasOne(Owner::class);
    }
}
