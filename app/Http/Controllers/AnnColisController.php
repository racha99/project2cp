<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\Colis;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\User;
use App\Photo;

class AnnColisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Annonce::all();
        return view('annonce_colis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('annonce_colis');
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

        'wilaya_D'=>'required',
       'wilaya_A'=>'required',
        'Date_D'=>'required',
         'Date_A'=>'required',
        'Taille'=>'required',
        'Poids'=>'required',

        'description'=>'required',
        'demande_spe'=>'required',

         ]);



         $post= new Annonce;


         $post->wilaya_D=$request->input('wilaya_D');
         $post->wilaya_A=$request->input('wilaya_A');
         $post->Date_D=$request->input('Date_D');
         $post->Date_A=$request->input('Date_A');
         $post->Taille=$request->input('Taille');
         $post->Poids=$request->input('Poids');
         $post->type_annonce='colis';
         $post->user_id = Auth::user()->id;

         $post->save();

         $post_colis= new Colis;

         $post_colis->id_annonce=$post->id;

         $post_colis->description=$request->input('description');



         $post_colis->demande_spe=$request->input('demande_spe');



        //  $post->Demande_spe=$request->input('Demande_spe');



        $post_colis->save();

        $annonce= Annonce::find($post->id)->id;
        $annonces = Annonce::all();
        //$annonce_id=array($annonce);
        //return redirect('annonces')->with($annonce);
        $k = $annonce;
        return view('upfile')->with('k',$k);
        //return $annonce_id;
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
