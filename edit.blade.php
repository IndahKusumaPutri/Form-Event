@extends("layouts.app")
@section("menu","master")
@section("submenu","event")
@section('title','Data Event')
@section("content")
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">Ubah Data Event Posyandu</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('event.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Ubah Data Event</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Ubah Data Event</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <form class="form-horizontal" action="/event/edit/{{ $event->id_event }}" method="post"> {{ csrf_field() }} 
                    <input type="hidden" name="_method" value="POST"> 
                      <div class="form-group row"> 
                          <label class="control-label col-sm-2">Layanan Kesehatan</label> 
                        <div class="col-sm-10"> 
                          <select class="col-sm-12 form-control" name="id_layanankesehatan" >
                            @foreach($lakes as $key => $val):
                                <option value="<?= $val['id_layanankesehatan'] ?>" {{ $val->id_layanankesehatan === $event->id_layanankesehatan ? 'selected' : '' }}>{{$val['nama_layanan']}} || {{$val['jenis_layanan']}} </option>
                            @endforeach
                        </select>
                        </div> 
                      </div> 
                      <div class="form-group row"> 
                          <label class="control-label col-sm-2">Nama Event</label> 
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="nama_event" value="{{ $event->nama_event }}"> 
                        </div> 
                      </div>
                      <div class="form-group row"> 
                          <label class="control-label col-sm-2">Tanggal</label> 
                        <div class="col-sm-10"> 
                          <input type="date" id="datePickerId" class="form-control" name="tanggal" value="{{ $event->tanggal }}"> 
                        </div> 
                      </div> 
                      <div class="form-group row"> 
                          <label class="control-label col-sm-2">Keterangan</label> 
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="keterangan" value="{{ $event->keterangan }}"> 
                        </div> 
                      </div>
                      <div class="form-group row"> 
                        <div class="col-sm-offset-2 col-sm-6"> 
                          <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin mengubah data tersebut?')">Perbaharui Data</button> 
                          <a href="{{ route('event.index') }}" class="btn btn-outline-danger">Batal</a>
                        </div> 
                      </div> 
                    </form>
                </div>
            </div>
        </div> 
    </div> 
</div>
@endsection
