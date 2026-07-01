<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = ['id', 'user_id', 'image','title','text','category_id','authors_image','authors_name','authors_profession', 'created_at', 'updated_at'];

    // Define relationships (Tell laravel that an Article belongs to a Category and a User)
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}