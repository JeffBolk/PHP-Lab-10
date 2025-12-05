<?php
// Jeffrey Bolk
// User Controller

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // Function to register user
    public function registerUser(Request $request)
    {
        // Validate data
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:5', 'max:255'],
        ]);

        // Encrypt password
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        auth()->login($user);
        return redirect('/');
    }

    // Function to login user 
    public function login(Request $request)
    {
        // Validate data
        $data = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        
        // Try logging in
        if(auth()->attempt([
            'name' => $data['username'],
            'password' => $data['password']
        ])) {
            // Redirect to page 1
            $request->session()->regenerate();
            return redirect()->intended('/page1');
            
        }
        // redirect to login page
        return redirect('/');
    }

    // Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        // Redirect to login page
        return redirect('/');
    }
}


?>