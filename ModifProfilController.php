<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;

// use Illuminate\Foundation\Auth\User;
use App\User;
class ModifProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->user()->id;
        $user=User::find($id);

        return view('pages.user_page')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // User::all();
        // return view('pages.modifier_profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
           'last_name'=>'required',
            'email'=>'required',
            'date_nai'=>'required',
             'numero'=>'required',
             'password'=>'confirmed',

            // 'sexe'=>'required',
             ]);

             $id=auth()->user()->id;
             $user=User::find($id);
             $user->name=$request->input('name');
             $user->last_name=$request->input('last_name');

             $user->email=$request->input('email');
             $user->date_nai=$request->input('date_nai');
             $user->numero=$request->input('numero');
         if($request->input('password')!=NULL){$user->password=Hash::make($request['password']);}
            //  $user->password=$request->input('password');
            //  $user->sexe=$request->input('sexe');
             $user->save();
             return 1;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
