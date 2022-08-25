<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ParentController;

class HomeController extends ParentController
{
    public function index(){
        return view('pages.dashboard.index');
    }
}
