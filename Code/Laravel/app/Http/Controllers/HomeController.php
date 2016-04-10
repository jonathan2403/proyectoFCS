<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

}
