<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latest = Program::latest()->take(10)->get();
        return view('front.home', [
            'latest' => $latest,
        ]);
    }


    public function medical(){
        $latest = Program::latest()->take(10)->get();
        return view('front.medical', [
            'latest' => $latest,
        ]);
    } 
    

}
