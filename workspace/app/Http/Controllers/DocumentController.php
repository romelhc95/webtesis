<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Career;
use App\Area;
use App\Line;
use App\AreaChief;
use App\Scheme;
use App\StateDoc1;
use App\Document;
use App\Http\Requests;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document=Document::All();
        return view('secretary.listdocument');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty= Faculty::lists('description', 'id');
        $areachief = AreaChief::lists('name');
        $scheme = Scheme::lists('schema_description');
        $state = StateDoc1::lists('description');
        return view('secretary.createdocument', compact('faculty', 'areachief','scheme','state'));
    }
    public function getCareer(Request $request, $id)
    {
        if($request->ajax()){
            $career = Career::careers($id);
            return response()->json($career);
        }
    }
    
    public function getArea(Request $request, $id)
    {
        if($request->ajax()){
            $area = Area::areas($id);
            return response()->json($area);
        }
    }
    
    public function getLine(Request $request, $id)
    {
        if($request->ajax()){
            $line = Line::lines($id);
            return response()->json($line);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
