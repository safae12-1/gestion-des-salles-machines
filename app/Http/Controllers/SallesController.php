<?php

namespace App\Http\Controllers;


use App\Models\salle;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salle =salle::all();
        return view('salle.index')->with(['salle'=>$salle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function store(Request $request)
    {
        $this->validate($request,[
            'id'=> 'required|numeric',
            'code'=> 'required|numeric',
            'libelle'=> 'required',
        ]);
        salle::create($request->exp('_token'));
        return redirect()->route('salle.index')->with(['sucess'=>'added succesfuly']);
    }**/
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id' => 'required|numeric',
            'code' => 'required|numeric',
            'libelle' => 'required',
            
        ]);
        $data = $request->except(['_token']);
        salle::create($data);
        return redirect()->route("salle.index")->with([
            "success" => " added successfully"
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salle=salle::where('id',$id)->first();
       return view('salle.show')->with([
        'salle'=>$salle
       ]) ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $salle=salle::where('id',$id)->first();
       return view('salle.edit')->with([
        'salle'=>$salle
       ]) ; 
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
        $salle=salle::where('id',$id)->first();
        $this->validate($request, [
            'id' => 'required|numeric',
            'code' => 'required|numeric',
            'libelle' => 'required',
            
        ]);
        $salle->update($request->except('_token','_method'));
        return redirect()->route("salle.index")->with([
            "success" => " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salle=salle::where('id',$id)->first();
        $salle->delete();
        return redirect()->route("salle.index")->with([
            "success" => " deleted successfully"
        ]);
    }
}
