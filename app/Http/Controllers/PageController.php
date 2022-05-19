<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;


class PageController extends Controller
{
   public function upload()
   {
       return view('upload');
   }

   public function store1(Request $request )
   {
    
       $data=new Document();

       $file=$request->file;

       $filename=time().'.'.$file->getClientOriginalExtension();
       
       $request->file->move('assets',$filename);

       $data->file=$filename;

       $data->name=$request->name;
       $data->kode=$request->kode;
       $data->tahunkurikulum=$request->tahunkurikulum;
       $data->prodi=$request->prodi;

       $data->save();
       return redirect()->back();
   }

   public function show()
   {
       $data=Document::all();
       return view('prodi_d3ti', compact('data'));
   }

   public function view($id)
   {
       $data=Document::find($id);
       return view('review', compact('data'));
   }
}
