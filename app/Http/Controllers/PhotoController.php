<?php

namespace App\Http\Controllers;

use App\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
    	$photos = photo::all();

        return view('photos.index',['photos'=>$photos]);
    }

    public function show($id)
    {
        return view('photos.show', ['id' => $id]);
    }
}
