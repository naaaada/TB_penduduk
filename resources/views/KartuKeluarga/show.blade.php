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
                            <strong class="card-title">Kartu keluarga {{$kk->nama}}</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('KartuKeluarga.store') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="kode">No Kartu Keluarga: </label>
                <input class="form-control transparent" name="no" type="text" disabled value="{{ $kk->kartu_keluarga->no}}">
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Pencatatan: </label>
                <input class="form-control transparent" name="nama" type="text" disabled value="{{ $kk->tanggal_pencatatan}}" >
            </div>
            
            </form>
            
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
</div>

@endsection