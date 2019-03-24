<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use Illuminate\Foundation\Auth\User;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        $users = User::all();
      //  return view('pages.annonces')->with('annonces',$annonces)->with('users',$users);
        return view('map');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

      $annonce=Annonce::find($id);
      $var =$annonce->user_id;
      $user=User::find($var);
      /*@if( $annonce->type_annonce == 1)
        $colis=App\User::where('$id','=',$annonce->annonce_id)->first();
          # code...

      @endif*/
        /*  $colis= Colis::find($id);
       $var=$colis->annonce_id;
       $annonce = Annonce::find($var);
        $var1=$annonce->user_id;
         $user= User::find($var1);
       //3$user=users::find( {{$use->annonce_id}})*/

       return view('/annoncered',compact('annonce','user'));
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
