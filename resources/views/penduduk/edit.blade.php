@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
            <div class="card-header">
                <h4 class="card-title">
                
                       Edit Data Penduduk
               
                </h4>
                <a href="/penduduk" style="color: pink;">back</a>
            </div>

            <div class="card-body p-3">
            <form action="{{route('penduduk.update',['id'=>$pddk->id]) }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" id="id" name="id" value="{{$pddk->id}}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text"  class="form-control" id="nama" name="nama" placeholder="nama" value="{{$pddk->nama}}">
                        <span class="text-danger" id="namaError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nik">NIK</label>
                        <input type="text"  class="form-control" id="nik" name="nik" placeholder="nik" value="{{$pddk->nik}}">
                        <span class="text-danger" id="nikError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no">No Kartu keluarga</label>
                        <input type="text"  class="form-control" id="no" name="no" placeholder="no" value="{{$pddk->kartu_keluarga->no}}">
                        <span class="text-danger" id="noError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text"  class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir" value="{{$pddk->tempat_lahir}}">
                        <span class="text-danger" id="tempat_lahirError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date"  class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tannggal lahir" value="{{$pddk->tanggal_lahir}}">
                        <span class="text-danger" id="tanggal_lahirError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <input type="date"  class="form-control" id="agama" name="agama" placeholder="agama" value="{{$pddk->agama}}">
                        <span class="text-danger" id="agamaError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text"  class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{$pddk->jenis_kelamin}}">
                        <span class="text-danger" id="jenis_kelaminError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="level_pendidikan">Level Pendidikan</label>
                        <input type="text"  class="form-control" id="level_pendidikan" name="level_pendidikan" placeholder="level_pendidikan" value="{{$pddk->level_pendidikan}}">
                        <span class="text-danger" id="level_pendidikanError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text"  class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" value="{{$pddk->pekerjaan->nama}}">
                        <span class="text-danger" id="pekerjaanError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status_pernikahan">Status Pernikahan</label>
                        <input type="text"  class="form-control" id="status_pernikahan" name="status_pernikahan" placeholder="status_pernikahan" value="{{$pddk->status_pernikahan}}">
                        <span class="text-danger" id="status_pernikahanError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kewarganegaraan">Kewarganegraan</label>
                        <input type="text"  class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="kewarganegaraan" value="{{$pddk->kewarganegaraan->nama}}">
                        <span class="text-danger" id="kewarganegaraanError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ayah">Ayah</label>
                        <input type="text"  class="form-control" id="ayah" name="ayah" placeholder="ayah" value="{{$pddk->ayah}}">
                        <span class="text-danger" id="ayahError"></span>
                    </div>
                    

                    <div class="form-group col-md-6">
                        <label for="ibu">Ibu</label>
                        <input type="text"  class="form-control" id="ibu" name="ibu" placeholder="ibu" value="{{$pddk->ibu}}">
                        <span class="text-danger" id="ibuError"></span>
                    </div>
                </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>

                </form>
            </div>
@endsection