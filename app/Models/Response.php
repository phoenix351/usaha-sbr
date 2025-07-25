<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Response extends Model
{
    use HasFactory;

    protected $fillable = ['region_id'];
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
    public function arts(): HasMany
    {
        return $this->hasMany(ResponseArt::class);
    }
}
