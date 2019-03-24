<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\Trajet;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\User;
class AnnTrajetController extends Controller
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
        return view('annonce_trajet');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce_trajet');
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

            'nb_km'=>'required',
           'freq_voyage'=>'required',
            'Prix'=>'required',

             ]);

             $post= new Annonce;

             $post->wilaya_D=$request->input('wilaya_D');
             $post->wilaya_A=$request->input('wilaya_A');
             $post->Date_D=$request->input('Date_D');
             $post->Date_A=$request->input('Date_A');
             $post->Taille=$request->input('Taille');
             $post->Poids=$request->input('Poids');
             $post->type_annonce='trajet';
             $post->user_id = Auth::user()->id;


             $post->save();
             $post_trajet= new Trajet;

             $post_trajet->id_annonce=$post->id;

             $post_trajet->nb_km=$request->input('nb_km');

             $post_trajet->freq_voyage=$request->input('freq_voyage');

             $post_trajet->Prix=$request->input('Prix');

            //  $post->Demande_spe=$request->input('Demande_spe');



            $post_trajet->save();
            $annonces = Annonce::all();
            $users = User::all();
            return redirect('annonces')->with('annonces',$annonces)->with('users',$users);

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
