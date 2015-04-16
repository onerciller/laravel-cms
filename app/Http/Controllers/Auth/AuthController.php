<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller {


	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;


	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
	
	
	public function getLogin () {

		return view('backend.auth.login');

	}


	public function postLogin(LoginRequest $request)
	{
		$credentials = ['username'=>$request->input('username'), 'password' => $request->input('password')];
		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect('/admin');
		}
		return redirect('/auth/login')
			->withErrors(['These credentials do not match our records.'])
			->withInput($request->only('email'));
	}


	public function postRegister(
		RegisterRequest $request,
		UserRepository $user_gestion)
	{
		$user = $user_gestion->store($request->all());
		$this->auth->login($user);
		return redirect('/');
	}


}
