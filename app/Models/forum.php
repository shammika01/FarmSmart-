<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    use HasFactory;

    // Define the table name (optional if your table name follows Laravel's conventions)
    protected $table = 'forum';

    // Define the fillable attributes that can be mass-assigned
    protected $fillable = [
        'user_id',
        'user_name',
        'topic',
        'content',
        'image',
    ];

    // Define any relationships if needed (e.g., a relationship with the 'User' model)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(comment::class, 'post_id');
    }
}
