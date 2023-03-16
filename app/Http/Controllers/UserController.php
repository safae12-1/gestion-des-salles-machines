<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =User::all();
        return view('user.index')->with(['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
    
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',     
        'password' => 'required',
        // 'role' => 'required',
    ]);

    $data = $request->except(['_token']);
    $data['password'] = Hash::make($request->password); // Hash the password
    User::create($data);
    return redirect()->route("user.index")->with([
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
        $user=User::where('id',$id)->first();
        return view('user.show')->with([
         'user'=>$user
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
        $user=User::where('id',$id)->first();
        
        // Use the bcrypt() function to unhash the password
        //$unhashed_password = bcrypt('password');
        $unhashed_password = 'password';

        return view('user.edit')->with([
        'user' => $user,
        'unhashed_password' => $unhashed_password
        ]);
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
        $user=User::where('id',$id)->first();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            
        ]);
        
        $data = $request->except('_token', '_method');
        $data['password'] = Hash::make($request->password); // Hash the new password
        $user->update($data);
        return redirect()->route("user.index")->with([
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
        $user=User::where('id',$id)->first();
        $user->delete();
        return redirect()->route("user.index")->with([
            "success" => " deleted successfully"
        ]);
    }
}
