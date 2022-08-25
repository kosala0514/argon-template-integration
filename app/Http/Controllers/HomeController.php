<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ParentController;
use domain\Facades\ProductFacade;

class HomeController extends ParentController
{
    public function index(){
        $response['items']=ProductFacade::allActive();
        return view('pages.dashboard.index')->with($response);
    }
}
