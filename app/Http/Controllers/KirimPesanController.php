<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimPesanController extends Controller
{
    public function index(){
        return view('kirimPesan');
    }
}
