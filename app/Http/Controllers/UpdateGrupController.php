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

        if ($response->failed() || !isset($data['data'])) {
            Log::error('Gagal mengambil daftar perangkat dari API Fonnte', ['response' => $data]);
            return redirect()->back()->with('error', 'Gagal mengambil daftar perangkat.');
        }

        $devices = collect($data['data']);
        $groups = session('groups', []); // Ambil daftar grup dari session jika ada

        return view('updateGrup', compact('member', 'devices', 'groups'));
    }

    private function getApiKeyForDevice($deviceName, $deviceToken)
    {
        $response = Http::withHeaders([
            'Authorization' => $deviceToken,
        ])->post('https://api.fonnte.com/get-devices');

        $data = $response->json();

        if ($response->failed() || !isset($data['data']) || !is_array($data['data'])) {
            Log::error('Gagal mendapatkan data perangkat dari API Fonnte', ['response' => $data]);
            return null;
        }

        foreach ($data['data'] as $device) {
            if (isset($device['name']) && $device['name'] === $deviceName) {
                return $device['api_key'] ?? null;
            }
        }

        return null;
    }

    public function updateGrup(Request $request)
    {
        $request->validate([
            'device_name'  => 'required|string',
            'device_token' => 'required|string|min:10|max:50',
        ], [
            'device_name.required'  => 'Pilih perangkat terlebih dahulu.',
            'device_token.required' => 'Token perangkat wajib diisi.',
            'device_token.min'      => 'Token perangkat minimal 10 karakter.',
            'device_token.max'      => 'Token perangkat maksimal 50 karakter.',
        ]);

        $deviceName  = $request->input('device_name');
        $deviceToken = $request->input('device_token');

        $apiKey = $this->getApiKeyForDevice($deviceName, $deviceToken);

        if (!$apiKey) {
            return redirect()->back()->with('error', 'Token atau perangkat tidak valid.');
        }

        // 🔹 **Ambil daftar grup setelah token valid**
        $response = Http::withHeaders([
            'Authorization' => $apiKey,
        ])->post('https://api.fonnte.com/fetch-group');

        $data = $response->json();

        if ($response->failed() || !isset($data['data'])) {
            Log::error('Gagal mengambil daftar grup', ['response' => $data]);
            return redirect()->back()->with('error', 'Gagal mengambil daftar grup.');
        }

        $groups = collect($data['data']);

        // Simpan daftar grup di session agar bisa diakses setelah redirect
        return redirect()->route('update-grup')->with([
            'success' => "Perangkat: $deviceName berhasil diperbarui!",
            'groups'  => $groups,
        ]);
    }
}
