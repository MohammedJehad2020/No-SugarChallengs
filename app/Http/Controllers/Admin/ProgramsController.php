<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Program::class);

        if ($request->name) {
            $programs = Program::when($request->name, function ($query, $value) {
                $query->where('programs.name', 'LIKE', "%{$value}%");
            })->orderBy('name', 'ASC')->paginate();
            
        } else {
            $programs = Program::latest()->orderBy('name', 'ASC')->paginate();
        }


        return View::make('admin.programs.index', [
            'programs' => $programs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create', Program::class);

        return view('admin.programs.create', [
            'program' => new Program(),
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
        $this->authorize('create', Program::class);
        $request->validate(Program::validateRules());
        $request->merge([
            'slug' => Str::slug($request->post('name')),
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/');
        }

        $program = Program::create($data);

        return redirect()->route('admin.programs.index')
            ->with('success', "البرنامج {$program->name} تم إنشاؤه !");
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
        $program = Program::find($id);
        $this->authorize('update', $program);

        return view('admin.programs.edit', [
            'program' => $program,
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
        $program = Program::find($id);

        $this->authorize('update', $program);

        $request->validate(Program::validateRules());

        $data = $request->all();

        $previous = false;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->storeAs('/images', $file->getclientOriginalName(), [
                'disk' => 'uploads',
            ]);
            $previous = $program->image;
        }

        $program->update($data);
        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }

        return redirect()->route('admin.programs.index')
            ->with('success', "البرنامج ($program->name) تم تحديثه !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $this->authorize('delete', $program);
        $program->delete();

        if ($program->image) {
            Storage::disk('uploads')->delete($program->image);
        }

        return redirect()->route('admin.programs.index')
            ->with('success', "البرنامج ($program->name) تم حذفه !");
    }
}
