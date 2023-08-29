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
        $data['tittle'] = "Faq";
        return view("veskai.faq",$data);
    }

    public function contact(){
        $data['tittle'] = "Contact";
        return view("veskai.contact",$data);
    }

    public function survania(){
        $data['tittle'] = "Survania";
        return view("veskai.survania",$data);
    }
    public function unbandiscord(){
        $data['tittle'] = "Unbanned";
        return view("veskai.unban-discord",$data);
    }

    public function unbansurvania(){
        $data['tittle'] = "Unbanned";
        return view("veskai.unban-survania",$data);
    }
    public function login(){
        $data['tittle'] = "Login";
        return view("veskai.login",$data);
    }
    public function register(){
        $data['tittle'] = "Register";
        return view("veskai.register",$data);
    }
    public function terms(){
        $data['tittle'] = "Terms";
        return view("veskai.terms",$data);
    }
    public function changer(){
        $data['tittle'] = "Changer";
        return view("veskai.changer",$data);
    }
}
