<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{

    public function index()
    {
        return view('student::admin.students.index');
    }

    public function create()
    {
        return view('student::admin.students.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('student::admin.students.show');
    }

    public function edit($id)
    {
        return view('student::admin.students.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
