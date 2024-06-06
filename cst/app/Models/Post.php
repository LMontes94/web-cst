<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function postType(): BelongsTo
    {
        return $this->belongsTo(PostType::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class, 'department_post');
    }

    public function documentPosts(): HasMany
    {
        return $this->hasMany(DocumentPost::class);
    }

    public function imagePosts(): HasMany
    {
        return $this->hasMany(ImagePost::class);
    }

    public function videoPosts(): HasMany
    {
        return $this->hasMany(VideoPost::class);
    }
}
