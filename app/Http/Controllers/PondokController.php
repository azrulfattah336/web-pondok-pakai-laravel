<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PondokController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function tataTertib()
    {
        return view('tatatertib');
    }

    public function dataSantri()
    {
        $santris = session()->get('santris', []);
        return view('data_santri', compact('santris'));
    }

    public function simpan(Request $request)
    {
        $santris = session()->get('santris', []);

        $santris[] = [
            'nama' => $request->nama,
            'asal' => $request->asal,
        ];

        session()->put('santris', $santris);

        return redirect('/data-santri');
    }


}
