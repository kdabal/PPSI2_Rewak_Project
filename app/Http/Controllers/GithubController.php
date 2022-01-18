<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirect(){

        return Socialite::driver('github')->redirect();
    }

    public function callback(){

        $githubUser = Socialite::driver('github')->user();

        $user = User::where('github_id', $githubUser->id)->first();

        if($user) {
            $user->update([
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
            ]);
        } else {
            $token= AuthController::register($user);
        }


        return $token;
    }

}
