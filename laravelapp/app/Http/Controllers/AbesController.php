<?php

namespace App\Http\Controllers;

use App\Models\Abes;
use App\Models\UserAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AbesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Abes::latest()->first();
        $QR = QrCode::size(200)->generate('http://127.0.0.1:8000/user/absen/create');
        $users = UserAbsen::latest()->get();
        return view('Admin.index', compact('data', 'QR', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'link' => 'required',
            'shift' => 'required',
        ]);
        Abes::query()->delete();
        Abes::create([
            'link' => route('absen.create'),
            'shift' => $request->shift,
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abes $abes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abes $abes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abes $abes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abes $abes)
    {
        //
    }
    public function rangking()
    {
        $rangking = UserAbsen::select('nama', DB::raw('COUNT(*) as total_terlambat'))
            ->where('status', 'terlambat')
            ->groupBy('nama')
            ->orderByDesc('total_terlambat')
            ->get(10);

        return view('admin.top', compact('rangking'));
    }
    public function alasan_toprank($name)
    {

        $data = UserAbsen::where('nama', $name)
            ->where('status', ['terlambat', 'Tepat Waktu'])
            ->orderByDesc('created_at')
            ->get()
        ;
        // $user = UserAbsen::where('nama', $name)->count();
        $nama = $name;

        // $hasil = $user > 0 ? round(($data / $user) * 100, 2) : 0;


        return view('admin.alasantop', compact('data', 'nama'));
    }

}
