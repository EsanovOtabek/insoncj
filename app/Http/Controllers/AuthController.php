<?php

namespace App\Http\Controllers;

use App\Models\Statik;
use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Http;


class AuthController extends Controller
{

    public function index(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin') return redirect()->route('admin.index');
            if(Auth::user()->role == 'user') return redirect()->route('profile.index');
        }
        $static = Statik::find(1);

        return view('web.login',[
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function register(){

        if(Auth::check()){
            if(Auth::user()->role == 'user') return redirect()->route('profile.index');
        }
        $static = Statik::find(1);

        return view('web.register',[
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }


    public function login(Request $request){
        $redirect = "login";

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('email','password');
//        $user['phone'] = str_replace('-','',$user['phone']);

        if(Auth::attempt($user)){
            $role = Auth::user()->role;
            $r = new RoleController();
            $successMessage = $r->getAuthMessage($role);
            $redirect = $r->redirectRole($role);
            session(['userRole'=>$role]);
            session(['userDescription'=> $r->getRoleDescription($role)]);
            return redirect()->route($redirect)->with('success_msg', $successMessage);
        }

        return redirect()->back()->with('error_msg', "Login yoki parol xato!");
    }

    public function registerStore(Request $request){
        $redirect = 'register';

        $user = $this->validateData();
        $user['role'] = 'user';

        session()->put('user_register',[
                'fish' => $user['fish'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => 'user',
            ]
        );
        session()->put('otp_email', $user['email']);

        $obj = new Otp();
        $otp = $obj->generate(session()->get('otp_email'), 6, 5);
        $this->sendCode($otp->token);
        return redirect()->route('otp')->with('success_msg', "Elektron pochtangiz xabar jo'natildi");

    }

    public function otp(){
        if(!session()->has('otp_email')) return redirect()->route('register');
        $static = Statik::find(1);

        return view('web.otp',[
            'static_tel1' =>$static['static_tel1'],
            'static_tel2' =>$static['static_tel2'],
            'static_tel3' =>$static['static_tel3'],
            'static_email' =>$static['static_email'],
            'adress_uz' =>$static['adress_uz'],
            'adress_en' =>$static['adress_en'],
            'adress_ru' =>$static['adress_ru'],
        ]);
    }

    public function re_otp(){
        if(!session()->has('otp_email')) return redirect()->route('register');
        $obj = new Otp();
        $otp = $obj->generate(session()->get('otp_email'), 6, 5);
        $this->sendCode($otp->token);

        return redirect()->route('otp')->with('success_msg', "Elektron pochtangiz xabar jo'natildi");
    }

    public function otp_check(Request $request){
        $obj = new Otp();
        $otp = $obj->validate(session()->get('otp_email'), $request->token);
        if($otp->status){
            $user = session()->get('user_register');
            $u['email'] = $user['email'];
            $u['password'] = $user['password'];

            $user['password'] = bcrypt($user['password']);
            if(User::create($user)){

                if(Auth::attempt($u)){
                    $role = Auth::user()->role;
                    $r = new RoleController();
                    $successMessage = $r->getAuthMessage($role);
                    $redirect = $r->redirectRole($role);
                    session(['userRole'=>$role]);
                    session(['userDescription'=> $r->getRoleDescription($role)]);
                    return redirect()->route($redirect)->with('success_msg', $successMessage);
                }
            }
        }


        return redirect()->route('register')->with('error_msg', "Ro'yxatdan o'tishda xatolik yuz berdi");
    }

    public function sendCode($code){
        $arr = session('user_register');
        $response = Http::get('http://hcsd.uz/message_send.php', [
            'name' => $arr['fish'],
            'mail' => $arr['email'],
            'code' => $code,
        ]);
        return $response;
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect(route('index'));
    }

    public function validateData()
    {
        return request()->validate([
            'email' => 'required',
            'password' => 'required|min:8',
            'fish' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!",
            'min' => "Parol uzunligi 8 belgidan kam bo'lmasin!!!",
        ]);
    }
}
