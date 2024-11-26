<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private function _logout(Request $request)
    {
        $auth = Auth::guard('student');
        $student = $auth->user();
        if ($student) {
            // TODO:: log activity
        }
        $auth->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    //
    public function login(Request $request)
    {
        return view('student.pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'ID Pengguna harus diisi.',
            'password.required' => 'Kata sandi harus diisi.',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $error = '';
        $data = $request->only(['username', 'password']);
        $auth = Auth::guard('student');
        if (!$auth->attempt($data)) {
            $error = 'Username atau password salah!';
            // UserActivity::log(UserActivity::AUTHENTICATION, 'Login', 'Login gagal. Pengguna dengan username ' . e($request->post('username')) . ' mencoba login.');
        } else {
            $request->session()->regenerate();
            // UserActivity::log(UserActivity::AUTHENTICATION, 'Login', 'Login sukses. Pengguna ' . e(Auth::user()->username) . ' telah login.');
            return redirect(route('student.home'));
        }

        return redirect()->back()->withInput()->with('error', $error);
    }

    public function logout(Request $request)
    {
        $this->_logout($request);
        return redirect(route('student.login'))->with('success', 'Anda telah logout.');
    }
}
