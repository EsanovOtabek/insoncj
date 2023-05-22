<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return redirect()->route('profile.home');
    }

    public function home()
    {
        return view('user.home');
    }

    public function edit(){
        return view('user.profile-edit',[
            'user' => User::find(auth()->user()->id),
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->fish = $request->fish;
        $user->phone = $request->phone;
        $user->workplace = $request->workplace;
        $user->position = $request->position;
        $user->save();
        return redirect()->back()->with('success_msg',"O'zgarishlar saqlandi!");
    }

    public function updatePassword(Request $request){
        $user = User::find(auth()->user()->id);

        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password,auth()->user()->password)){
            return back()->with("error_msg", "Eski parolni xato kiritdingiz!");
        }
        $user->password = Hash::make($request->new_password);

        return redirect()->back()->with('success_msg',"Parol yangilandi!");
    }


}
