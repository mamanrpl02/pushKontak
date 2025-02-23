<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateGrupController extends Controller
{
    public function index(){
        $member = Auth::user();

        return view('updateGrup', compact('member'));
    }
}
