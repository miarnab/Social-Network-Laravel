<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required | max:120',
            'last_name' => 'required | max:120',
            'email' => 'required | email | unique:users',
            'dob' => 'required',
            'password' => 'required | min:4 | max:15',
            'conf_password' => 'required | min:4 | max:15'
        ]);
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $dob = $request['dob'];
        $password = bcrypt($request['password']);
        $conf_password = bcrypt($request['conf_password']);

        $user = new User();

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->dob = $dob;
        $user->password = $password;
        $user->conf_password = $conf_password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
