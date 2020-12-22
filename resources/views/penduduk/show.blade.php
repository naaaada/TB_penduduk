@extends('../main')

@section('title','Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data {{$pddk->nama}}</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('penduduk.store') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="kode">No KK: </label>
                <input class="form-control transparent" name="no" type="text" disabled value="{{ $pddk->kartu_keluarga->no}}">
            </div>
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input class="form-control transparent" name="nama" type="text" disabled value="{{ $pddk->nama}}" >
            </div>
            <div class="form-group">
                <label for="kode">NIK: </label>
                <input class="form-control transparent" name="nik" type="text" disabled value="{{ $pddk->nik}}">
            </div>
            <div class="form-group">
                <label for="kode">Tempat Lahir: </label>
                <input class="form-control transparent" name="tempat" type="text" disabled value="{{ $pddk->tempat_lahir}}">
            </div>
            <div class="form-group">
                <label for="kode">Tanggal Lahir: </label>
                <input class="form-control transparent" name="tanggal" type="date" disabled value="{{ $pddk->tanggal_lahir}}">
            </div>
            <div class="form-group">
                <label for="kode">Agama: </label>
                <input class="form-control transparent" name="agama" type="text" disabled value="{{ $pddk->agama}}">
            </div>
            <div class="form-group">
                <label for="kode">Jenis Kelamin: </label>
                <input class="form-control transparent" name="jeka" type="text" disabled value="{{ $pddk->jenis_kelamin}}">
            </div>
            <div class="form-group">
                <label for="kode">Level Pendidikan: </label>
                <input class="form-control transparent" name="lp" type="text" disabled value="{{ $pddk->level_pendidikan->nama}}">
            </div>
            <div class="form-group">
                <label for="kode">Pekerjaan: </label>
                <input class="form-control transparent" name="pk" type="text" disabled value="{{ $pddk->pekerjaan->nama}}">
            </div>
            <div class="form-group">
                <label for="kode">Status Pernikahan: </label>
                <input class="form-control transparent" name="sp" type="text" disabled value="{{ $pddk->status_pernikahan}}">
            </div>
            <div class="form-group">
                <label for="kode">Status Keluarga: </label>
                <input class="form-control transparent" name="sk" type="text" disabled value="{{ $pddk->status_keluarga}}">
            </div>
            <div class="form-group">
                <label for="kode">Kewarganegaraan: </label>
                <input class="form-control transparent" name="kw" type="text" disabled value="{{ $pddk->kewarganegaraan->nama}}">
            </div>
       
            <div class="form-group">
                <label for="ayah">Ayah: </label>
                <input class="form-control transparent" name="ayah" type="text" disabled value="{{ $pddk->ayah}}">
            </div>
            <div class="form-group">
                <label for="ibu">Ibu: </label>
                <input class="form-control transparent" name="ibu" type="text" disabled value="{{ $pddk->ibu}}" >
            </div>
            </form>
            
            </div>
                    </div>
                </div>
                
</

                </div>
                
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection