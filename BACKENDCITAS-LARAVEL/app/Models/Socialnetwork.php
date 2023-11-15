<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialnetwork extends Model
{
    use HasFactory;

    public function socialnetworks(){
        return $this->hasMany(Socialnetwork::class);
    }
}
