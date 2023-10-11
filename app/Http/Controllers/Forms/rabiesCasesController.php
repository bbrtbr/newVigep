<?php
namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cases as ModelsCases;


class rabiesCasesController extends Controller
{
    public function index()
    {
        $cases = ModelsCases::all();
        return view('forms.antirabico', compact('cases'));
    }


    
}
