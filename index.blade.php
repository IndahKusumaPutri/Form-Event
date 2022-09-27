@extends("layouts.app")
@section("menu","master")
@section("submenu","event")
@section('title','Data Event')
@section("content")
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><center><font color="256D85">Data Event Posyandu</font></center></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="{{ route('event.index') }}">Home</a></li> --}}
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        @if(session('Data dihapus'))
            <div class="alert alert-danger" role="alert">
                {{session('Data dihapus')}}
            </div>
        @endif

        @if(session('Data diedit'))
            <div class="alert alert-success" role="alert">
                {{session('Data diedit')}}
            </div>
        @endif

        @if(session('Data ditambah'))
            <div class="alert alert-success" role="alert">
                {{session('Data ditambah')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px">
                <div class="panel panel-default">
                    <div class="card-header">
                        <div class="col-md-12">
                            {{-- <div class="float-sm-right"> <p>Data Event</p> </div> --}}
                            <a href="/event/create" class="btn btn-outline-info"><i class="nav-icon fa fa-thin fa-calendar-day"> Tambah Data</i></a>
                            <a href="/cetakevent" target="_blank" class="btn btn-outline-primary"><i class="fas fa-print"> Cetak Data</i></a>
                        </div>
                        <br/>
                        <!--/.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table id="table-data" class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                    <th>ID Event</th>
                                    <th>Layanan Kesehatan</th>
                                    <th>Nama Event</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event as $i => $p)
                                    <tr> 
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $p->lakes->nama_layanan }} || {{ $p->lakes->jenis_layanan }}</td>
                                        <td>{{ $p->nama_event }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>
                                            <form method="post" action="{{ route('event.destroy',$p->id_event) }}"> {{ csrf_field() }}
                                                <a href="{{ route('event.show',$p->id_event) }}" class="btn btn-outline-warning"><i class="nav-icon fa fa-thin fa-eye"></i></a>
                                                <a href="{{ route('event.edit',$p->id_event) }}" class="btn btn-outline-success"><i class="nav-icon fa fa-solid fa-marker"></i></a>
                                                <input type="hidden" name="_method" value="DELETE"> 
                                                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Yakin anda ingin menghapus data tersebut?')"><i class="nav-icon fa fa-thin fa-trash"></i></button> 
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
            </div>
        </div>
    </div>
</div>
@endsection