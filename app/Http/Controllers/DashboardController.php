<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        echo "ini dashboard";
    }

    public function dashboard(){
        $data['tittle'] = "Dashboard";
        return view("veskai.dashboard",$data);
    }

    public function faq(){
        $data['tittle'] = "faq";
        return view("veskai.faq",$data);
    }

    public function contact(){
        $data['tittle'] = "contact";
        return view("veskai.contact",$data);
    }

    public function survania(){
        $data['tittle'] = "survania";
        return view("veskai.survania",$data);
    }
}
