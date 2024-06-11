<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function posts(): BelongsToMany
    {

        return $this->belongsToMany(Post::class, 'department_post');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'permisos');
    }
}
