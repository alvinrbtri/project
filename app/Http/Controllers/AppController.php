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
        $data["data_company_pic"] = CompanyPic::where("pic_id", Auth::user()->id)->get();

        return view("dashboard", $data);
    }
}
