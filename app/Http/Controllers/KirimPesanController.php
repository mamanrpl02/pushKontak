<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KirimPesanController extends Controller
{
    public function index(){
        $member = Auth::user(); 
        return view('kirimPesan',compact('member'));
    }
}
