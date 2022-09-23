<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function post_login(Request $request)
    {
        $req = $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            Auth::attempt($req);
            if ($user->id_role == 1) {
                return redirect()->intended("/admin/dashboard");
            } else if ($user->id_role == 2) {
                return redirect("/superadmin/dashboard_super");
            } else if ($user->id_role == 3) {
                return redirect("/finance/dashboard_finance");
            } else if ($user->id_role == 4) {
                return redirect("/vendor/dashboard_vendor");
            } else if ($user->id_role == 5) {
                return redirect("/user/home");
            }
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}
