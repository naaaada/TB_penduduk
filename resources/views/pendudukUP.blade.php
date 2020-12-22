@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
<div class="col-lg-12">
    <div class="card-box pb-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                Penduduk usia produktif (15 - 64 tahun)
                </h4>
            </div>

            <div class="card-body">
                <table id="tPenduduk" class="table">
                    <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $pddk)
                        <tr>
                            <td>{{$pddk->nik}}</td>
                            <td>{{$pddk->nama}}</td>
                            <td>{{$pddk->tanggal_lahir}}</td>
                            <td>{{$pddk->jenis_kelamin}}</td>
                            <td>{{$pddk->agama}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection