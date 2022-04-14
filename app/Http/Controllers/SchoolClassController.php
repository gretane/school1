<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Http\Requests\StoreSchoolClassRequest;
use App\Http\Requests\UpdateSchoolClassRequest;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = SchoolClass::where('id', '=', 1)->first();
        dd($class->teachers);

        $schoolClasses = SchoolClass::all();
        return view('school-class.index', ['schoolClasses' => $schoolClasses]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school-class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolClassRequest $request)
    {
        $schoolClass = new SchoolClass;
        $schoolClass->grade = $request->school_class_grade;
        $schoolClass->letter = $request->school_class_letter;
        $schoolClass->save();
        return redirect()->route('schoolClass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolClass $schoolClass)
    {
        return view('school-class.edit', ['schoolClass' => $schoolClass]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolClassRequest  $request
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolClassRequest $request, SchoolClass $schoolClass)
    {
        $schoolClass->grade = $request->school_class_grade;
        $schoolClass->letter = $request->school_class_letter;
        $schoolClass->save();
        return redirect()->route('schoolClass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolClass $schoolClass)
    {
        if($schoolClass->classStudents->count()){
            return 'Deletion not available. There are students asigned to this class.';
            }
            $author->delete();
            return redirect()->route('schoolClass.index');
    }
}
