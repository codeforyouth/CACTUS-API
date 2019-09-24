<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Services\LoginService;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    private $login_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LoginService $login_service)
    {
        $this->middleware('guest')->except('logout');
        $this->login_service = $login_service;
    }

    public function getRedirectUrl()
    {
        return Socialite::driver('github')->scopes(['read:user', 'public_repo'])->redirect()->getTargetUrl();
    }


    public function handleProviderCallback(Request $request)
    {
        $github_user = Socialite::driver('github')->stateless()->user();
        //github_idを元にuser検索
        //いなければ新規作成して返す
        $app_user = $this->login_service->createOrUpdateUser($github_user);
        return $app_user->createToken();
    }
}
