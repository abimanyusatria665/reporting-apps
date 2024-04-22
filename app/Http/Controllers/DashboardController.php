<?php

namespace App\Http\Controllers;

use App\Models\Neighbourhood;
use App\Models\Village;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Village::all();
        return view('index', compact('data'));
    }
}
