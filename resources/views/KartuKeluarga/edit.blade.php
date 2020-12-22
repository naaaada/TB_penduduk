@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Edit Data Kartu keluarga
               
                </h4>
                <a href="/KartuKeluarga" style="color: pink;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="{{route('KartuKeluarga.update',['id'=>$kk->id]) }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" id="id" name="id" value="{{$kk->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">No Kartu keluarga</label>
                        <input type="text"  class="form-control" id="no" name="no" placeholder="no" value="{{$kk->no}}">
                        <span class="text-danger" id="namaError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">Jorong</label>
                        <input type="text"  class="form-control" id="jorong" name="jorong" placeholder="jorong" value="{{$kk->jorong}}">
                        <span class="text-danger" id="jorongError"></span>
                    </div>
                                   </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>
@endsection