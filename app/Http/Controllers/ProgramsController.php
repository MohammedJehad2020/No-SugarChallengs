<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function show($id){
        $program = Program::findOrFail($id);

        return view('front.programs.show', [
            'program' => $program,
        ]);
    }
}
