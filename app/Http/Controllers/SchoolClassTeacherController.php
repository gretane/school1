<?php

namespace App\Http\Controllers;

use App\Models\schoolClassTeacher;
use App\Http\Requests\StoreschoolClassTeacherRequest;
use App\Http\Requests\UpdateschoolClassTeacherRequest;

class SchoolClassTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreschoolClassTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreschoolClassTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\schoolClassTeacher  $schoolClassTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(schoolClassTeacher $schoolClassTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schoolClassTeacher  $schoolClassTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(schoolClassTeacher $schoolClassTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateschoolClassTeacherRequest  $request
     * @param  \App\Models\schoolClassTeacher  $schoolClassTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateschoolClassTeacherRequest $request, schoolClassTeacher $schoolClassTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schoolClassTeacher  $schoolClassTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(schoolClassTeacher $schoolClassTeacher)
    {
        //
    }
}
