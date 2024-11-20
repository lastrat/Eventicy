<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = ($request->has('remember')) ? true : false;
        
        DB::beginTransaction();
        try{
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']],$remember)) {
                $asset = asset('/');
    //            dd($request->urlPath);
                if ($request->urlPath) {
                    return redirect($asset.$request->urlPath);
                } else {
                    DB::commit();
                    Toastr::success('success, Login Successfully',);
                    return redirect()->route('dashboard');
                }
                
               
            } else {  
                     Toastr::error('fail, Wrong Email or Password Given!','Error');
                     return redirect()->back();  
                }
        }
        catch(\Exception $e){
            DB::rollback();
            Toastr::error('fail, LOGIN :)','Error');
            return redirect()->back();
        }

    }

    public function userLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
