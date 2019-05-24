<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Mockery\Exception;

class SocialAuthFacebookController extends Controller {

  //  public function redirectToProvider() {
  //    return Socialite::driver('facebook')->redirect();
  //  }

  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
  public function redirect() {
    return Socialite::driver('facebook')->redirect();
  }

  /**
   * Return a callback method from facebook api.
   *
   * @return callback URL from facebook
   */
  public function callback() {
    try {
      $user = Socialite::driver('facebook')->user();
      $create[ 'name' ] = $user->getName();
      $create[ 'email' ] = $user->getEmail();
      $create[ 'facebook_id' ] = $user->getId();


      $userModel = new User;
      $createdUser = $userModel->addNew($create);
      Auth::loginUsingId($createdUser->id);


      return redirect()->route('home');
    } catch(Exception $e) {
      return $this->redirect('login/facebook');
    }

  }
}
