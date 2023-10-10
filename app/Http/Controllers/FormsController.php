<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function antirabico()
    {
        return view('forms.antirabico');
    }
    public function forms()
    {
        return view('dashboardForms');
    }
}
