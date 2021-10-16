
@extends('layout.template')

@section('title', 'TCL')

@section('content')
<form action="/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" value="{{ old('barang') }}" name="barang"
                                        class="form-control input-pill @error('barang') is-invalid @enderror" id="barang"
                                        placeholder="BARANG">
                                    <div class="text-danger">
                                        @error('barang')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="text" value="{{ old('nama') }}" name="nama"
                                        class="form-control input-pill @error('nama') is-invalid @enderror"
                                        id="nama" placeholder="NAMA PELANGGAN">
                                    <div class="  text-danger">
                                        @error('nama_pelanggan')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="text" value="{{ old('alamat') }}" name="alamat"
                                        class="form-control input-pill @error('alamat') is-invalid @enderror" id="alamat"
                                        placeholder="ALAMAT">
                                    <div class="text-danger">
                                        @error('alamat')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('no_telp') }}" name="no_telp"
                                        class="form-control input-pill @error('no_telp') is-invalid @enderror"
                                        id="barang" placeholder="NO TELP">
                                    <div class="text-danger">
                                        @error('no_telp')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('jumlah') }}" name="jumlah"
                                        class="form-control input-pill @error('jumlah') is-invalid @enderror"
                                        id="barang" placeholder="JUMLAH">
                                    <div class="text-danger">
                                        @error('jumlah')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-round btn-sm float-right ">Simpan</button>
                                </div>
                            </form>
                        </div>

                        
                        <div class="box box-solid box-info">

    
                            
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th> Nama Pelanggan </th>
                <th> Alamat </th>
                <th> No Telepon </th>            
              </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $list)

            <tr>
                <td> {{ $list->nama }}</td>
                <td> {{ $list->alamat }} </td>
                <td> {{ $list->no_telp }}</td>
               
            </tr>

            @endforeach
        </tbody>
        
        


       
    </table>
    <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="basic-datatables" class="display table  table-hover">
                                    <thead>
                                        <tr>

                                            <th scope="col">Barang</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody>

                                        @foreach ($barang as $b)
                                            <tr>
                                                <td>{{ $b->nama_barang }}</td>
                                                <td>{{ $b->jumlah }}</td>
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
                </div>



                        </div>

                       
                        <div class="row">
         
        <!-- /.row -->
@endsection 
