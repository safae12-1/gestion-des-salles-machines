<?php

namespace App\Http\Controllers;


use App\Models\machine;
use Illuminate\Http\Request;

class machineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machine =machine::all();
        return view('machine.index')->with(['machine'=>$machine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machine.create');
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
        machine::create($request->exp('_token'));
        return redirect()->route('machine.index')->with(['sucess'=>'added succesfuly']);
    }**/
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'id' => 'required|numeric',
            'reference' => 'required',
            'marque' => 'required',
            'dateAchat' => 'required',
            'prix' => 'required',
            'salleid' => 'required|numeric',

            
        ]);
        $data = $request->except(['_token']);
        machine::create($data);
        return redirect()->route("machine.index")->with([
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
        $machine=machine::where('id',$id)->first();
       return view('machine.show')->with([
        'machine'=>$machine
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
       $machine=machine::where('id',$id)->first();
       return view('machine.edit')->with([
        'machine'=>$machine
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
        $machine=machine::where('id',$id)->first();
        $this->validate($request, [
            'id' => 'required|numeric',
            'reference' => 'required',
            'marque' => 'required',
            'dateAchat' => 'required',
            'prix' => 'required',
            'salleid' => 'required|numeric',
            
        ]);
        $machine->update($request->except('_token','_method'));
        return redirect()->route("machine.index")->with([
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
        $machine=machine::where('id',$id)->first();
        $machine->delete();
        return redirect()->route("machine.index")->with([
            "success" => " deleted successfully"
        ]);
    }
}