<?php

namespace App\Http\Controllers;

use App\Models\Abes;
use App\Models\UserAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $qr = Abes::latest()->first();
        return view('user.absen', compact('qr'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data_uri = $request->foto;

        if ($data_uri) {
            $img = str_replace('data:image/jpeg;base64,', '', $data_uri);
            $img = str_replace(' ', '+', $img);
            $imageData = base64_decode($img);

            $filename = 'img_' . time() . '_' . rand(100, 999) . '.jpg';

            Storage::disk('public')->put('images/' . $filename, $imageData);

            $shift = Abes::latest()->first();

            UserAbsen::create([
                'foto' => $filename,
                'nama' => $request->nama,
                'shift' => $shift->shift,
                'status' => $request->status,
                'alasan' => $request->alasan,
            ]);
        }

        return redirect()->route('userview');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
