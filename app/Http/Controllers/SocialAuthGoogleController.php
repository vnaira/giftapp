<?php
/**
 * Created by PhpStorm.
 * User: nairav
 * Date: 20/05/2019
 * Time: 17:28
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Mockery\Exception;


class SocialAuthGoogleController {

  public function redirect()
  {
    return Socialite::driver('google')->redirect();
  }


  public function callback()
  {
    try {


      $googleUser = Socialite::driver('google')->user();
      $existUser = User::where('email',$googleUser->email)->first();


      if($existUser) {
        Auth::loginUsingId($existUser->id);
      }
      else {
        $user = new User;
        $user->name = $googleUser->name;
        $user->email = $googleUser->email;
        $user->google_id = $googleUser->id;
        $user->password = md5(rand(1,10000));
        $user->save();
        Auth::loginUsingId($user->id);
      }
      return redirect()->to('/home');
    }
    catch (Exception $e) {
      return 'error';
    }
  }
}