<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class market extends Model
{
    use HasFactory;
    protected $table = 'markets';
    public $timestamps = false;


    protected $fillable = ['name', 'quantity', 'price', 'image',];
}
