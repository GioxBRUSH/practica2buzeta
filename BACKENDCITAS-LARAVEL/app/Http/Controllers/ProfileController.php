<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Exception;

class ProfileController extends Controller
{
    
    public function profile(){
        try{
            $profile = Profile::with(['frameworks', 'hobbies'])
            ->where('identification', '212858668')
            ->first();

            return response()->json($profile, 200);
        }
        catch(Exception $exception){
            throw new Exception($exception->getMessage());
        }
    }
}
