<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndFarmController extends Controller
{
    public function index()
    {

        return view('farm.index');
    }
}
