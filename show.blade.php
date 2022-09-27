<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Ubah Data Warga</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('Warga.update',$warga->NIK) }}" method="post"> {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">NIK</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="NIK" value="{{ $warga->NIK }}"> 
                                </div> 
                        </div> 
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Nama Warga</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="nama" value="{{ $warga->nama }}"> 
                                </div> 
                        </div> 
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Jenis Kelamin</label> 
                                <div class="col-sm-6"> 
                            <label for="Jenkel">
                            <input type="radio" name="Jenkel" value="{{ $warga->Jenkel }}" {{$warga->Jenkel == 'Laki-laki'? 'checked' : ''}}> &nbsp Laki-Laki &nbsp &nbsp &nbsp
                            <input type="radio" name="Jenkel" value="{{ $warga->Jenkel }}" {{$warga->Jenkel == 'Perempuan'? 'checked' : ''}}> &nbsp Perempuan
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
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Tempat_lahir" value="{{ $warga->Tempat_lahir }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Tanggal Lahir</label> 
                                <div class="col-sm-10"> 
                            <input type="date" class="form-control" name="Tanggal_lahir" value="{{ $warga->Tanggal_lahir }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Pendidikan</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Pendidikan" value="{{ $warga->Pendidikan }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Agama</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Agama" value="{{ $warga->Agama }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Alamat</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Alamat" value="{{ $warga->Alamat }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Pekerjaan</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Pekerjaan" value="{{ $warga->Pekerjaan }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">No Hp</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="No_Handphone" value="{{ $warga->No_Handphone }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Status</label> 
                                <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="Status" value="{{ $warga->Status }}"> 
                                </div> 
                        </div>
                        <div class="form-group row"> 
                          <div class="col-sm-offset-2 col-sm-6"> 
                            <button type="submit" class="btn btn-primary">Perbaharui Data</button> 
                            <a href="{{ route('Warga.index') }}" class="btn btn-danger">Batal</a>
                          </div> 
                        </div> 
                    </form>
                </div>
            </div>
        </div> 
    </div> 
</div>
