<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $json  = Teacher::query()
       ->whereBetween('id',[1,50]) 
       ->get();
        

        return response()->json([
            'status' => '200 OK',
            'data'=> $json
        ]);
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
       

        $json = Teacher::create([

            'title_id' => $request->title_id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'province_id' => $request->province_id,
        ]);

        return response()->json([
            'data' => $json,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

        $json = Teacher::find($id);

        return response()->json([
            'status code' => "200 ",
            'data'=> $json
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $json = Teacher::where('id',$id)->update([
            'name' => $request->name,

        ]);
        return response()->json([
            'data' => $json

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $json = Teacher::where('id',$id)->delete();

        return response()->json([
            'data' => $json,

        ]);
    }
}