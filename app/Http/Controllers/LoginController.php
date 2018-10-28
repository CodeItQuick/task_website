<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create() {
        return view('login.login');
    }

    public function store() {
        
        if(! auth()->attempt(request('email', 'password')){
            return back()-> withErrors(['message' => 'Please check your credentials']);
        }
        
        else {
            return redirect()->home;
        }
    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }
=======
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create() {
        return view('login.login');
    }

    public function store() {
        
        if(! auth()->attempt(request('email', 'password')){
            return back()-> withErrors(['message' => 'Please check your credentials']);
        }
        
        else {
            return redirect()->home;
        }
    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }
>>>>>>> 350e5e04b298409876a7bdc2e61e5692d6431fe0
}