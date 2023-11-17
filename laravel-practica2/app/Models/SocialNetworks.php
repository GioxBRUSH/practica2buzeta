<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetworks extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'socialNetworkName',
        'link',
        
    ];

    public function socialnetworks()
    {
        return $this->belongsTo(Profile::class);
    }
}
