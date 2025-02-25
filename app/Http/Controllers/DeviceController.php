<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    // Menampilkan semua perangkat yang terkait dengan api_key tertentu
    public function index()
    {
        $token = Auth::user()->tokenAkun;
        $member = Auth::user();

        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post('https://api.fonnte.com/get-devices');

        $data = $response->json();
        $devices = $data['status'] ? collect($data['data']) : collect([]);
        $page_title = 'All Devices';
        dd($devices->toArray());

        return view('device', compact('devices', 'member', 'page_title'));
    }

    public function reconnect($id)
    {
        return $this->sendDeviceRequest('reconnect', $id);
    }

    public function disconnect($id)
    {
        return $this->sendDeviceRequest('disconnect', $id);
    }

    public function delete($id)
    {
        return $this->sendDeviceRequest('delete-device', $id);
    }

    private function sendDeviceRequest($endpoint, $id)
    {
        $token = Auth::user()->tokenAkun;

        $response = Http::withHeaders([
            'Authorization' => $token,
        ])->post("https://api.fonnte.com/$endpoint", ['id' => $id]);

        return redirect()->back()->with('message', $response->json()['message'] ?? 'Action completed');
    }
}
