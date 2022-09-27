@extends('layouts.app')
@section('content')
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <a href="{{ route('Warga.create') }}" class="btn btn-primary">Tambah Warga</a>
                    <div class="float-sm-right"> <p>Data Warga</p> </div> 
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <form class="form-horizontal" action="{{ route('Warga.store') }}" method="post"> {{ csrf_field() }} 
                        <div class="form-group row">
                            <label class="control-label col-sm-2">NIK</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="NIK"> 
                                @if($errors->has('NIK'))
                                <div class="text-danger">
                                    {{ $errors->first('NIK')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Nama Warga</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Nama"> 
                                @if($errors->has('Nama'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Jenis Kelamin</label> 
                             <div class="col-sm-6"> 
                             <label for="Jenkel">
                            <input type="radio" name="Jenkel" value="Laki-laki" id="Jenkel">&nbsp Laki-Laki &nbsp &nbsp &nbsp
                            <input type="radio" name="Jenkel" value="Perempuan" id="Jenkel">&nbsp Perempuan
                            </label>
                                @if($errors->has('Jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('Jenkel')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Tempat Lahir</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Tempat_lahir"> 
                                @if($errors->has('Tempat_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('Tempat_lahir')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Tanggal Lahir</label> 
                             <div class="col-sm-6"> 
                                <input type="date" class="form-control" name="Tanggal_lahir"> 
                                @if($errors->has('Tanggal_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('Tanggal_lahir')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Pendidikan</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Pendidikan"> 
                                @if($errors->has('Pendidikan'))
                                <div class="text-danger">
                                    {{ $errors->first('Pendidikan')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Agama</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Agama"> 
                                @if($errors->has('Agama'))
                                <div class="text-danger">
                                    {{ $errors->first('Agama')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Alamat</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Alamat"> 
                                @if($errors->has('Alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('Alamat')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Pekerjaan</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Pekerjaan"> 
                                @if($errors->has('Pekerjaan'))
                                <div class="text-danger">
                                    {{ $errors->first('Pekerjaan')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">No Hp</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="No_Handphone"> 
                                @if($errors->has('No_Handphone'))
                                <div class="text-danger">
                                    {{ $errors->first('No_Handphone')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Status</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="Status"> 
                                @if($errors->has('Status'))
                                <div class="text-danger">
                                    {{ $errors->first('Status')}}
                                </div>
                            @endif
                             </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-5 col-sm-6"> 
                                <button type="submit" class="btn btn-primary">Simpan</button> 
                            </div> 
                        </div> 
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
@endsection
