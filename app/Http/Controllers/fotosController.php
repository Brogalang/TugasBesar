<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fotos;

class fotosController extends Controller
{
    function index(){
    	return view('profil');
    }

    function insert(Request $request){

    	$fotos = "N";
    	if($request->hasFile('filenama')){
    		$destination ="upload";
    		$filenama = $request->file('filenama');
    		$filenama->move($destination, $filenama->getClientOriginalName());
    		$fotos = "Y";
    	}

    	if($fotos=="Y"){
	    	$fotos = new fotos;
	    	$fotos->nama = $request->nama;
	    	$fotos->filenama = $filenama->getClientOriginalName();
	    	$fotos->save();
    	}

    	return redirect('/profil');
    }
}
