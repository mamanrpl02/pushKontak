<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GrupWhatsAppController extends Controller
{
    public function index()
    {
        $member = Auth::user();
        $token = Auth::user()->tokenAkun;

        // Ambil data grup dari API Fonnte
        $responseGroups = Http::withHeaders([
            'Authorization' => $token, // Ganti dengan token Fonnte Anda
        ])->post('https://api.fonnte.com/get-whatsapp-group');

        $dataGroups = $responseGroups->json();
        $groups = $dataGroups['data'] ?? [];

        // Ambil data perangkat dari API Fonnte
        $responseDevices = Http::withHeaders([
            'Authorization' => $token, // Ganti dengan token Fonnte Anda
        ])->post('https://api.fonnte.com/get-devices');

        $dataDevices = $responseDevices->json();
        $devices = $dataDevices['data'] ?? [];

        // Kirim data ke tampilan
        return view('listGroup', compact('groups', 'devices', 'member'));
    }

    public function getGroupsByDevice(Request $request)
    {
        $deviceToken = $request->query('device');
        $member = Auth::user();
        $token = Auth::user()->tokenAkun;

        // Ambil data grup dari API Fonnte berdasarkan perangkat
        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post('https://api.fonnte.com/get-whatsapp-group', [
            'device_token' => $deviceToken, // Kirim token perangkat jika diperlukan
        ]);

        $data = $response->json();
        $groups = $data['data'] ?? [];

        return response()->json(['groups' => $groups]);
    }

    // public function updateGroup()
    // {
    //     $token = Auth::user()->tokenAkun;

    //     // Ambil data grup dari API Fonnte
    //     $response = Http::withHeaders([
    //         'Authorization' => $token , // Ganti dengan token Fonnte Anda
    //     ])->post('https://api.fonnte.com/fetch-group');


    //     // Ambil respons dari API
    //     $data = $response->json();

    //     // Periksa apakah update berhasil
    //     if ($response->successful() &&   isset($data['status']) && $data['status'] === true) {
    //         return redirect()->back()->with('success', 'Grup berhasil diperbarui.');
    //     } else {
    //         return redirect()->back()->with('error', 'Gagal memperbarui grup.');
    //     }
    // }
}
