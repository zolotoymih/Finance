<?php

namespace App\Http\Controllers;

use App\TypeReport;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function vovaTest()
    {
        return view('index');
    }

    public function report($name_form)
    {
       //$name_form = "".$report->name_form;
       return view($name_form);
    }
}
