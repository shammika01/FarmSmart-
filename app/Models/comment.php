<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    // Define the fillable attributes that can be mass-assigned
    protected $fillable = [
        'post_id',
        'content',

    ];

    public function forum()
    {
        return $this->belongsTo(forum::class, 'post_id');
    }
}
