<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request, $city, $year, $month)
    {
        $view = "login_{$city}{$year}{$month}";
        // dd($view);
        $viewModel = compact(
            "view");
        return view("login.index", $viewModel);
    }
}
