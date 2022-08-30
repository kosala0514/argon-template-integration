<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use domain\Facades\ProductFacade;

class CustomerController extends ParentController
{
    public function index(){
        $response['items'] = ProductFacade::all();
        return view('pages.customer.index')->with($response);
    }
}
