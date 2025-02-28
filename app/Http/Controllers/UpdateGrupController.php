<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UpdateGrupController extends Controller
{
    public function index()
    {
        $member = Auth::user();
        $token = Auth::user()->tokenAkun;

        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post('https://api.fonnte.com/get-devices');

        $data = $response->json();
        // dd($data); // Periksa respons API

        $devices = isset($data['data']) ? collect($data['data']) : collect([]);

        return view('updateGrup', compact('member', 'devices'));
    }

    private function getApiKeyForDevice($deviceName)
    {
        $devices = config('devices');
        foreach ($devices as $device) {
            if ($device['name'] === $deviceName) {
                return $device['api_key'];
            }
        }
        return null;
    }

    public function updateGrup(Request $request)
    {
        // Validasi input
        $request->validate([
            'device_name' => 'required|string',
        ]);

        $deviceName = $request->input('device_name');

        // Ambil API Key berdasarkan nama perangkat
        $apiKey = $this->getApiKeyForDevice($deviceName);

        if (!$apiKey) {
            return redirect()->back()->with('error', 'API Key tidak ditemukan untuk perangkat yang dipilih.');
        }

        // Tampilkan data yang diambil (untuk debugging)
        dd($apiKey);
    }
}
