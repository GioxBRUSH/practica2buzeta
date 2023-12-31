<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frameworks extends Model
{
    use HasFactory;
    protected $fillable = [
        'frameworkName',
        'level',
        
    ];

    public function framework()
    {
        return $this->belongsTo(Profile::class);
    }
}
