<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tutorial extends Controller
{
    //

    public function show($id){

    	// echo "Hello from app >> http >> controllers " . $id;

    	return view('first');
    }
}
