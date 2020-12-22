@extends('main')

@section('title', 'Dashboard ')

@section('breadcrumbs') 
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pengolahan Data Penduduk</h1>
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
@section('content ')   

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong> Data Peduduk</strong>
                </div>
                <div class="pull-right">
                    <a href="" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table>
                    <thead>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                        
                    </thead>
                    <tbody>
                       
                        @foreach ($penduduks as $pddk)
                        <tr>
                            <td>{{ $pddk->nik }}</td>
                            <td>{{ $pddk->nama }}</td>
                            <td>{{ $pddk->agama }}</td>
                        <td>
                            <a href="{{ route('penduduk.show', $pddk->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View</a>
                            <a href="{{ route('penduduk.edit', $pddk->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                            <form style="display: inline" method="POST" action="{{ route('penduduk.destroy', $pddk->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="confirm('Yakin?')" class="btn btn-danger btn-xs" value="Delete user"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
          </tr>
      
        @endforeach
        </tbody>
      </table>
            </div>
        </div>
    </div>

                                  

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        @endsection
        @section('content ')   
        @endsection
