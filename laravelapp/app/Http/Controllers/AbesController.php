<?php

namespace App\Http\Controllers;

use App\Models\Abes;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AbesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin.index');
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

        $data = Abes::create([
            'link' => route('admin.index'),
            'shift' => $request->shift
        ]);

        $QR = QrCode::size(200)->generate($data->link);
        return redirect()->route('qr-sample', compact('QR'));
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
}
