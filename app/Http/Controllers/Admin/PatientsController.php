<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Program;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->name){
            $patients = Patient::when($request->name, function ($query, $value) {
                $query->where('patients.name', 'LIKE', "%{$value}%");
            })->orderBy('name', 'ASC')->paginate();

        }else{
            $patients = Patient::with('program')->paginate();

        }

        return view('admin.patients.index', [
            'patients' => $patients,
            'programs' => Program::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        
        return view('admin.patients.create', [
            'patient' => new Patient(),
            'programs' => Program::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Patient::validatePatientInfo());
       
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->email = $request->input('email');
        $patient->program_id = $request->input('program_id');
        $patient->gender = $request->gender;
        $patient->DOB = $request->post('birthday');
        $patient->phone = $request->phone;
        $patient->weight = $request->post('weight'); 
        $patient->height = $request->post('height'); 
        $patient->sugar_level = $request->post('sugar_level'); 
        $patient->country = $request->post('country');
        $patient->save();

        return redirect()->route('admin.patients.index')
        ->with('success', "تم انشاء حساب ل {$patient->name} !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        
        
        return view('admin.patients.edit', [
            'patient' => $patient,
            'programs' => Program::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $request->validate(Patient::validatePatientInfo($id));

        $patient->name = $request->name;
        $patient->email = $request->input('email');
        $patient->program_id = $request->input('program_id');
        $patient->gender = $request->gender;
        $patient->DOB = $request->post('birthday');
        $patient->phone = $request->phone;
        $patient->weight = $request->post('weight'); 
        $patient->height = $request->post('height'); 
        $patient->sugar_level = $request->post('sugar_level'); 
        $patient->country = $request->post('country');
        $patient->save();
        

        return redirect()->route('admin.patients.index')
        ->with('success', "المستخدم ($patient->name) تم التعديل عليه بنجاح!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('admin.patients.index')
            ->with('success', "المستخدم ($patient->name) تم حذفه!");
    }
}
