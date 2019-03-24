<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Image;


class filescontroller extends Controller
{
    public function upshowfile(){
        $k = '4';
        return view('upfile')->with('k',$k);
    }
    public function store(request $request)
    {
        if ($request->hasFile('file'))
        {

           foreach($request->file as $file)
          {
          $filename = $file->getClientOriginalName();
          //$file->storeAs('public/uploads/images',$filename);
          Image::make($file)->resize(300, 300)->save( public_path('/uploads/images/' . $filename ) );
          $photo = new Photo;
          $photo->filename = $filename;
            $photo->id_annonce=$request->annonce;
             $photo->save();




          }

      }

      return redirect('annonces');

    }
}
