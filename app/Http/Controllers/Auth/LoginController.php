<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/Auth';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required',
        ]);

        // Get the credentials from the request
        $credentials = $request->only('mobile', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_blocked == 1) {
                Auth::logout();
                return redirect()->back()->withErrors(['Your account is blocked. Please contact support.']);
            } else {
                $this->authenticated($request, $user);
                return redirect()->intended(route('home'));
            }
        } else {
            return redirect()->back()->withErrors(['The provided credentials do not match our records.']);
        }
        

        return redirect()->back()->withInput($request->only('mobile'));
    }


    protected function authenticated(Request $request, $user)
    {
        $company = Company::find(1);
        if ($company) {
            session()->put('fy_start_date', $company->fy_start_date);
            session()->put('fy_end_date', $company->fy_end_date);
            session()->put('from_date', $company->fy_start_date);
            session()->put('to_date', $company->fy_end_date);
            session()->put('date', date('Y-m-d'));
        }
        return redirect()->intended($this->redirectPath());
    }
}
