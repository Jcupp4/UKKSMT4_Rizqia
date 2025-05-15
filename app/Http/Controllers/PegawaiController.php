<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        $pegawais = Pegawai::where(function ($q) {
            if (isset(request()->search_nama)) {
                $q->where('nama', 'LIKE', '%' . request()->search_nama . '%');
            }
        })->get();

        return view('dashboard.pegawai.index', compact('pegawais'));
    }

    public function create(Request $request)
    {
        $pegawai = null;
        $user = null;
        if (isset(request()->id)) {
            $pegawai = Pegawai::with('user')->find(request()->id);
        }

        // dd($pegawai);
        return view('dashboard.pegawai.create', compact('pegawai', 'user'));
    }

    public function store(Request $request)
    {

        $pegawai = Pegawai::updateOrCreate( 
            ['id' => request()->id ?? null],
            [
                'nama' => request()->nama ?? null,
                'status' => request()->status ?? 1,
                'sex' => request()->sex ?? null,
                'location' => request()->lokasi ?? null,
            ]

        );

        User::create([
            'name' => request()->nama ?? null,
            'email' => request()->email ?? null,
            'password' => bcrypt(request()->password)
        ]);
        return redirect()->route('dashboard.admin.pegawai.index');
    }

    public function delete(Request $request)
    {
        $pegawai = Pegawai::find(request()->id);
        $pegawai->delete();
        return redirect()->back();
    }
}
