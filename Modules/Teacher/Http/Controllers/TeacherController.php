<?php

namespace Modules\Teacher\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher::admin.teachers.index');
    }

    public function create()
    {
        return view('teacher::admin.teachers.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('teacher::admin.teachers.show');
    }

    public function edit($id)
    {
        return view('teacher::admin.teachers.edit');
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
