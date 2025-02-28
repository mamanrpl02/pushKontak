<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class KirimPesanController extends Controller
{
    public function index()
    {
        $member = Auth::user();
        $token = Auth::user()->tokenAkun;

        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post('https://api.fonnte.com/get-devices');

        $data = $response->json();

        // Pastikan ada data perangkat sebelum mengaksesnya
        $devices = isset($data['data']) ? collect($data['data']) : collect([]);
        return view('kirimPesan', compact('member','devices'));
    }
}
