<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {

        return view('pages.home');
    }
    function profile() {

        return view('dashboards.users.profile');
    }
    function settings() {

        return view('dashboards.users.settings');
    }
}
