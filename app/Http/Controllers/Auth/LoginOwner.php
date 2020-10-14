<?php

namespace App\Http\Controllers\Auth;

use App\Model\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginOwner extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:owner')->except('logout');
    }

    public function showLoginForm()
    {
        return view('owner.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('owner')->attempt($credential, $request->filled('remember'))) {
            return redirect()->intended(route('owner.home'));
        }

        //return redirect()->back()->withInput($request->only('username', 'password'));

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('owner')->logout();

        $request->session()->invalidate();

        return redirect('/owner');
    }

    public function showRegistForm()
    {
        if (Auth::guard('owner')) {
            return view('owner/regist');
        }
        else {
            return view('owner/home');
        }
    }

    public function regist(Request $request)
    {
        $foto = 'user_picture_'.date('dmYhis').'.png';

        $owner = new Owner;
        $owner->nama = $request->nama;
        $owner->alamat = $request->alamat;
        $owner->kt_email = $request->email;
        $owner->kt_telp_wa = '';
        $owner->kt_fb = '';
        $owner->kt_ig = '';
        $owner->username = $request->username;
        $owner->password = bcrypt($request->password);
        $owner->foto = $foto;
        $owner->save();

        $request->file('foto')->move('images/foto_user', $foto);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('owner')->attempt($credential, $request->filled('remember'))) {
            return redirect()->intended(route('owner.home'));
        }

        return $this->sendFailedLoginResponse($request);
    }
}
