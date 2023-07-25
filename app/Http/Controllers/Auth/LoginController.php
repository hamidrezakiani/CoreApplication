<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role == 'ADMIN')
                auth('admin')->loginUsingId(auth()->user()->id);
            return redirect()->to('/');
        }
 
        return back()->withErrors([
            'email' => 'The email or password is incorrect.',
        ])->onlyInput('email');
    }
}