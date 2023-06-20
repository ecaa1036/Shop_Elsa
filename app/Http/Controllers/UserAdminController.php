<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAdmin;
use App\Models\User;

class UserAdminController extends Controller
{
    //
    function auth(Request $request){
        $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('tampilanAdmin');
        }
        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('tampilanAdmin');
        }
        return redirect()->back();

    }

    function register(){
        return view('registerAdmin');
    }

    function tambah(Request $request){

        $validate = $this->validate($request, [
            'kdadmin' => 'required|string|min:4',
            'namaadmin' => 'required|string',
            'telpon' => 'required|string|min:13',
            'email' => 'required|email',
            'password'=> 'required_with:confirm_password|min:6|same:confirm_password',
        ]);

        $validate['password'] = bcrypt($request->password);

        UserAdmin::create($validate);

        return redirect('loginAdmin');
    }

    function logout(){
        Auth::logout();
        return redirect('loginAdmin');
    }
}
