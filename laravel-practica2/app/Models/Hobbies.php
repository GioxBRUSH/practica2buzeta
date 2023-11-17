<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    use HasFactory;
    protected $fillable = [
        'hobbieName',
        
        
    ];

    public function hobbies()
    {
        return $this->belongsTo(Profile::class);
    }
}
