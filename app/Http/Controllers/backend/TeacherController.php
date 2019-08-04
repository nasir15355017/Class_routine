<?php

namespace App\Http\Controllers\backend;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::select('id','uid','name','short_name','department')->get();
        return view('backend.Professor.index')->with(compact('teachers',$teachers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Professor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate=[
            'uid'=>'required|max:20|min:1',
            'name'=>'required|max:20|min:1',
            'short_name'=>'required|max:20|min:1',
            'department'=>'required|max:20|min:1',
        ];
        $teacher = new Teacher();
        $teacher->uid= $request->input('uid');
        $teacher->name= $request->input('name');
        $teacher->short_name= $request->input('short_name');
        $teacher->department= $request->input('department');
        $teacher->save();
        session()->flash('message','created succesfully');
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
