<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('do_logout');
    }

    public function index()
    {
        return view('pages.admin.auth.main');
    }

    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
        {
            return response()->json([
                'alert' => 'success',
                'message' => 'Welcome back '. Auth::guard('admin')->user()->name,
                'callback' => 'reload',
            ]);
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.',
            ]);
        }
    }
    public function do_logout()
    {
        $user = Auth::guard('admin')->user();
        Auth::logout($user);
        return redirect('admin/auth');
    }
}
