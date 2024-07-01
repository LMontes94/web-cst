<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ip_address', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
