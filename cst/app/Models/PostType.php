<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostType extends Model
{
    protected $table = 'posts_type';
    use HasFactory;

    protected $guarded = [];

    public function posts(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
