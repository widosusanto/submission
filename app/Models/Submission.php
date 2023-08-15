<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Submission extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
      return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
      return $this->belongsTo(Status::class);
    }

    public function histories(): HasMany
    {
      return $this->hasMany(History::class);
    }
}

