<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("landingpage");
    }

    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }
    public function login(){
    return view("login");
    }
    public function register(){
        return view("register");
        }
} 