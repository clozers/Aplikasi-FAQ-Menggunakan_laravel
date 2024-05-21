<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\User;

class PertanyaanController extends Controller
{
    //
    //
    public function index()
    {
        $user = auth()->id();
        $pertanyaan = Pertanyaan::where('id_user', $user)->orderBy('created_at', 'desc')->paginate(5);
        return view('pertanyaan', ['pertanyaan' => $pertanyaan]);
    }
    public function cari(Request $request)
    {
        $user = auth()->id();
        $cari = $request->cari;
        $pertanyaan = Pertanyaan::where('id_user',$user)->where('pertanyaan', 'like', '%' . $cari . '%')->orderBy('created_at', 'desc')->paginate(5);
        return view('pertanyaan', ['pertanyaan' => $pertanyaan]);
    }
    public function tambah()
    {
        return view('pertanyaan_tambah');
    }
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('edit', compact('pertanyaan'));
    }
    public function update(Request $request, $id) 
    {
        $validateData = $request->validate([
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
            
        ]);
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->update($validateData);
        return redirect('pertanyaan')->with('pesan',"Ubah data Berhasil");
    }
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();

        return redirect('/pertanyaan')->with('success', 'Pertanyaan deleted successfully.');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);
        Pertanyaan::create([
            'id_user' => $request->id_user,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban
        ]);
        return redirect('/pertanyaan');
    }
}
