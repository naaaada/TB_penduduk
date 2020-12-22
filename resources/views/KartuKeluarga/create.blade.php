@extends('main')

@section('title', 'Tambah Data Keluarga')

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
                    <li class ="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
    
</div>  
@endsection

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Menambahkan Kartu Keluarga
               
                </h4>
                <a href="/" style="color: pink;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="{{route('KartuKeluarga.create',['id'=>$kk->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="kartu_keluarga_id" name="keluarga_id" value="{{$kk->id}}">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">No Kartu Keluarga</label>
                        <input type="text"  class="form-control" id="no" name="no" placeholder="no">
                        <span class="text-danger" id="noError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">Jorong</label>
                        <input type="text"  class="form-control" id="jorong" name="jorong" placeholder="jorong">
                        <span class="text-danger" id="jorongError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">Tanggal Pencatatan</label>
                        <input type="text"  class="form-control" id="tanggal_pencatatan" name="tanggal_pencatatan" placeholder="tanggal_pencatatan">
                        <span class="text-danger" id="tanggal_pencatatanError"></span>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>