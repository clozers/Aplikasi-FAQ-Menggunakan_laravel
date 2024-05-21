<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PageController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::paginate(10); // Ambil data pertanyaan dengan pembagian halaman 10 per halaman
        return view('page', compact('pertanyaan'));
    }
    public function user_cari(Request $request)
    {
        $cari = $request->cari;
        $pertanyaan = Pertanyaan::where('pertanyaan', 'like', '%' . $cari . '%')->orWhere('jawaban', 'like', '%' . $cari . '%')->orderBy('created_at', 'desc')->paginate(10);
        return view('page', ['pertanyaan' => $pertanyaan]);
    }
}
