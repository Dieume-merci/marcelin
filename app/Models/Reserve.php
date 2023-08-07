<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function Dotations():HasMany
    {
        return $this->hasMany(Dotation::class);
    }
}