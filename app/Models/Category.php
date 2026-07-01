<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // Define the Inverse Relationship (Optional, but best practice)
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}