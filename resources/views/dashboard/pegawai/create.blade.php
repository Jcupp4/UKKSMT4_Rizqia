@extends('layouts.app_dasboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Formulir</strong><small> Pegawai</small></div>
        <div class="card-body card-block">
            <form action="{{ route('dashboard.admin.pegawai.store') }}" method="POST">
            @csrf
            @if(isset($pegawai))
                <input type="hidden" value="{{$pegawai->id}}" name="id">
            @endif
                <div class="form-group"><label for="nama" class=" form-control-label">nama</label><input value="{{$pegawai->nama??''}}" type="text" id="nama" name="nama" placeholder="Enter your  nama" class="form-control"></div>
                <div class="form-group"><label for="email" class=" form-control-label">email</label><input value="{{$pegawai->user->email??''}}" type="text" id="email" name="email" placeholder="Enter your email" class="form-control"></div>
                <div class="form-group"><label for="nama" class=" form-control-label">password</label><input type="text" id="password" name="password" placeholder="Enter your  nama" class="form-control"></div>
                
                <div class="form-group">
                    <label for="select" class="form-control-label"
                            >Jenis Kelamin</label
                            >
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="sex" id="sex" class="form-control">
                            <option value="">Please select</option>
                            <option value="1" {{ (isset($pegawai) && $pegawai->sex==1) ?'selected':''}}>Laki - Laki</option>
                            <option value="0" {{ (isset($pegawai) && $pegawai->sex==0) ?'selected':''}}>Perempuan</option>
                            </select>
                        </div>
                </div>
            
                <div class="form-group"><label for="street" class=" form-control-label">Lokasi Pegawai</label><input value="{{$pegawai->location??''}}" type="text" id="lokasi" name="lokasi" placeholder="Enter lokasi" class="form-control"></div>
                <button type="submit"> tambah Data Pegawai </button>
            </form>
        </div>
    </div>
</div>
@endsection