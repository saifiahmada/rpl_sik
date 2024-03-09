<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    public function index(){
        return view('index_pasein');
    }

    public function store(Request $request){
        //dd($request->all());
        // Validasi data yang diterima dari form
        $request->validate([
            'nama' => 'required|string|max:60',
            'nrm' => 'required|string|max:6',
            'tempat_lahir' => 'nullable|string|max:30',
            'tanggal_lahir' => 'nullable|date',
            'gender' => 'required|in:L,P',
            'alamat' => 'required|string|max:100',
            'nomor_jamkes' => 'required|string|max:16',
        ]);

        // Simpan data pasien menggunakan method create
        Pasien::create($request->all());

        // Redirect ke halaman yang sesuai, atau bisa juga melakukan tindakan lain sesuai kebutuhan aplikasi Anda
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil disimpan.');
    
    }
}
