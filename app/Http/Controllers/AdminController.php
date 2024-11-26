<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }

    public function show_dashboard() {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')
                    ->where('admin_email', $admin_email)
                    ->where('admin_password', $admin_password)
                    ->first();

        if ($result) {
            session(['admin_name' => $result->admin_name]);
            session(['admin_id' => $result->admin_id]);
            return view('admin.dashboard');
        } else {
            session()->flash('message', 'Mật khẩu hoặc email không đúng, nhập lại nhé');
            return Redirect::to('/admin');
        }
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
        return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
 }
 }

    public function logout() {
        session()->forget(['admin_name', 'admin_id']);
        return Redirect::to('/admin');
    }
}
