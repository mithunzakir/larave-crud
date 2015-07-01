<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Session;


class StudentController extends Controller {

    public function std_directory() {
        echo 'I std directory';
    }

    public function login() {
        return view('login_page');
    }

    public function register() {
        return view('register');
    }

    public function do_register(Request $request) {

        $register = new Register();
        $register->email = $request->email;
        $register->password = md5($request->password);

        $register->save();

        Session::flash('success_msg', 'You have successfully Registered');
        return redirect('register');
    }

    public function all_users() {
        $data['users'] = Register::all();

        return view('user.all_users', $data);
    }

    public function professors() {
        return view('professors');
    }

    public function delete($user_id) {

        Register::where('id', '=', $user_id)->delete();
        return redirect('all_users');
    }

}
