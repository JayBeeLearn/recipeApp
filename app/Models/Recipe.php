<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'your_name', 
        'food_name', 
        'description',
        'ingredients',
        'food_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
