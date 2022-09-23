<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function dashboard_sup()
    {
        return view("superadmin.superadmin.dashboard_super");
    }
}
