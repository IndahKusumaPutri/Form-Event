@extends('layouts.app')
@section('content')
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px;">
                <div class="panel panel-default">
                        <div class="card-header">
                                <a href="{{ route('Warga.create') }}" class="btn btn-primary">Tambah Warga</a>
                                <div class="float-sm-right"> <p>Data Warga</p> </div> 
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                        <table id="example2" class="table table-hover text-nowrap">
                            <thead>
                                <tr> 
                                    <th>NIK</th> 
                                    <th>Nama Warga</th> 
                                    <th>Jenis Kelamin</th> 
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th> 
                                    <th>Pendidikan</th> 
                                    <th>Agama</th>
                                    <th>Alamat</th> 
                                    <th>Pekerjaan</th>
                                    <th>No Hp</th>
                                    <th>Status</th>
                                    <th>Aksi</th> 
                                </tr> 
                            </thead>
                            <tbody>
                                @foreach ($warga as $i => $p) 
                                <tr> 
                                    <td>{{ $i+1 }}</td> 
                                    <td>{{ $p->Nama }}</td>
                                    <td>{{ $p->Jenkel }}</td>
                                    <td>{{ $p->Tempat_lahir }}</td>
                                    <td>{{ $p->Tanggal_lahir }}</td>
                                    <td>{{ $p->Pendidikan }}</td>
                                    <td>{{ $p->Agama }}</td>
                                    <td>{{ $p->Alamat }}</td>
                                    <td>{{ $p->Pekerjaan }}</td>
                                    <td>{{ $p->No_Handphone }}</td>
                                    <td>{{ $p->Status }}</td>
                                    <td>
                                        <form method="post" action="{{ route('Warga.destroy',$p->id) }}"> {{ csrf_field() }}        
                                        <a href="{{ route('Warga.show',$p->id) }}" class="btn btn-warning"> Detail</a>
                                        <a href="{{ route('Warga.edit',$p->id) }}" class="btn btn-success" > Edit</a>
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-danger" type="submit">Hapus</button> 
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
@endsection
