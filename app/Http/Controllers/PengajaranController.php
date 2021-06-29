<?php

namespace App\Http\Controllers;

use App\Models\Pengajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengajaranController extends Controller
{
    public function index()
    {
        $data = Pengajaran::all();
        return view('pengajaran.index', compact('data'));
    }

    public function add()
    {
        return view('pengajaran.add');
    }

    public function create(Request $request)
    {
        $data = Pengajaran::create([
            'kode_mk'      => $request->kode_mk,
            'nama_mk'      => $request->nama_mk,
            'periode_id'   => $request->periode_id,
            'kelas'        => $request->kelas,
            'sks'          => $request->sks,
        ]);

        if ($data) {
            return redirect()->route('pengajaran.index')->with('success', 'Data added successfully');
        }
    }

    public function edit(Pengajaran $pengajaran)
    {
        return view('pengajaran.edit', compact('pengajaran'));
    }

    public function update(Request $request, Pengajaran $pengajaran)
    {
        $pengajaran = Pengajaran::findOrFail($pengajaran->id);

        $pengajaran->update([
            'kode_mk'      => $request->kode_mk,
            'nama_mk'      => $request->nama_mk,
            'periode_id'   => $request->periode_id,
            'kelas'        => $request->kelas,
            'sks'          => $request->sks,
        ]);

        if ($pengajaran) {
            return redirect()->route('user.index')->with('success', 'Kode MK ' . $pengajaran["kode_mk"] . ' Updated successfully');
        }
    }

    public function destroy(Pengajaran $pengajaran)
    {
        $pengajaran->find($pengajaran->id)->all();

        $pengajaran->delete();

        if ($pengajaran) {
            return redirect()->route('pengajaran.index')->with('success', 'Kode MK ' . $pengajaran["kode_mk"] . ' deleted successfully');
        }
    }
}