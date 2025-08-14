<?php

namespace App\Http\Controllers;

use App\Models\Class_Name;
use Illuminate\Http\Request;

class ClassNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Class_Name::all();
        return view('backend.classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Class_Name $class)
    {
        $students = $class->students;
        $subjects = $class->subjects;
        $teachers = $class->teachers;
        return view('classes.show',compact('class','students','subjects','teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Class_Name $class)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Class_Name $class_Name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Class_Name $class_Name)
    {
        //
    }
}
