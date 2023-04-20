<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{

    public function index(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin') return redirect()->route('admin.index');
            if(Auth::user()->role == 'user') return redirect()->route('profile.index');
        }

        return view('web.login');
    }

    public function register(){

        if(Auth::check()){
            if(Auth::user()->role == 'user') return redirect()->route('profile.index');
        }
        return view('web.register');
    }


    public function login(Request $request){
        $redirect = "login";

        $request->validate([
            'phone'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('phone','password');
        $user['phone'] = str_replace('-','',$user['phone']);

        if(Auth::attempt($user)){
            $role = Auth::user()->role;
            $r = new RoleController();
            $successMessage = $r->getAuthMessage($role);
            $redirect = $r->redirectRole($role);
            session(['userRole'=>$role]);
            session(['userDescription'=> $r->getRoleDescription($role)]);
            return redirect()->route($redirect)->with('success_msg', $successMessage);
        }

        return redirect()->route($redirect)->with('error_msg', "Login yoki parol xato!");
    }

    public function registerStore(Request $request){
        $redirect = 'register';

        $user = $this->validateData();
        $user['phone'] = str_replace('-','',$user['phone']);
        $user['password'] = bcrypt($user['password']);
        $user['role'] = 'user';
        if(User::create($user)){
            $a = $request->only('phone','password');
            $a['phone'] = $user['phone'];

            if(Auth::attempt($a)){
                $role = Auth::user()->role;
                $r = new RoleController();
                $successMessage = $r->getAuthMessage($role);
                $redirect = $r->redirectRole($role);
                session(['userRole'=>$role]);
                session(['userDescription'=> $r->getRoleDescription($role)]);
                return redirect()->route($redirect)->with('success_msg', $successMessage);
            }
        }

        return redirect()->back()->with('error_msg', "Ro'yxatdan o'tishda xatolik yuz berdi");

    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect(route('index'));
    }

    public function validateData()
    {
        return request()->validate([
            'phone' => 'required',
            'password' => 'required|min:8',
            'fish' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!",
            'min' => "Parol uzunligi 8 belgidan kam bo'lmasin!!!",
        ]);
    }
}
