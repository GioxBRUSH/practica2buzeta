<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Frameworks;
use App\Models\Hobbies;
use App\Models\Socialnetworks;
use Exception;

class ProfileController extends Controller
{
    public function profile(){
        try{
            $profile = Profile::where('identification', '212858668')-> first();
            $frameworks = Frameworks::where('profile_id', $profile->id);
            $hobbies = Hobbies::where('profile_id', $profile->id);
            $socialnetworks = Socialnetworks::where('profile_id', $profile->id);
            return response()->json(['profile' => $profile, 'frameworks' => $frameworks, 'hobbies' => $hobbies, 'socialnetworks' => $socialnetworks], 200);
        }
        catch(Exception $exception){
            throw new Exception($exception->getMessage());
        }
    }
}
