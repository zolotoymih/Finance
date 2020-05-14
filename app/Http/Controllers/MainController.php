<?php

namespace App\Http\Controllers;

use App\TypeReport;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $reports = TypeReport::get();
        return view('index', compact('reports'));
    }

    public function report($name_form)
    {
       //$name_form = "".$report->name_form;
       //dd($name_form);
        return view($name_form);
    }

    public function insert(Request $request)
    {
        //$name_form = "".$report->name_form;
        //dd($request);
        //return view($name_form);
    }
}
