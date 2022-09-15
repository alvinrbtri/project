<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyPic;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function profile()
    {
        return view("admin.profile");
    }

    public function home()
    {
        return view("admin.home.home");
    }
}
