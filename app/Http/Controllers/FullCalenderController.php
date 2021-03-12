<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class FullCalenderController extends Controller
{
    public function index(Request $request){
        return view('full-calender');
    }
}
