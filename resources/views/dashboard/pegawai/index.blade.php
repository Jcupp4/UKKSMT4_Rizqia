@extends('layouts.app_dasboard')

@section('content')
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <strong class="card-title">Pengelolaan data pegawai / staff</strong>
        <a href={{ route('dashboard.admin.pegawai.create') }}>
            <button>Tambah Data</button>
        </a>
    </div>
    <div class="table-stats order-table ov-h">
       <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            @forelse($pegawais as $idx => $pegawai)
                <tr>
                    <td>{{ $idx + 1 }}</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ ($pegawai->sex == 1) ? "Laki - Laki" : "Perempuan" }}</td>
                    <td>{{ $pegawai->location }}</td>
                    <td>{{ ($pegawai->status == 1) ? "Active" : "Draft" }}</td>
                    <td>
                        <div style="display:flex;gap:5px;">
                            <a href={{ route('dashboard.admin.pegawai.create', ["id" => $pegawai->id]) }}>
                                <button>Edit data</button>
                            </a>
                            <form method="POST" action={{ route("dashboard.admin.pegawai.delete", ["id" => $pegawai->id]) }}>
                                @csrf
                                <button type="submit"> delete Data Pegawai </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=6 style="text-align:center">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div> <!-- /.table-stats -->
</div>
</div>
@endsection