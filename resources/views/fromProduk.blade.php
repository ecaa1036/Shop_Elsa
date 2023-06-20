{{-- @extends('tampilanAdmin')
@section('content') --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Produk</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
       
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            {{-- <form action="{{ url('portopolio/create')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            <div class="card">
            <div class="row">
                <div class="container p-8 mt-12">
                    
                    <form action="">
                        <h2 class="fw-bold text-center">PRODUK</h2>

                        <div class="col-mb-3">
                            <label for="" class="form-label">Kode Produk</label>
                            <input type="text" name="kdproduk" class="form-control" value="{{ $produk->kdproduk}}"  placeholder="Masukan kode produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Nama Produk</label>
                            <input type="text" name="namaproduk" class="form-control" value="{{ $produk->namaproduk}}"  placeholder="Masukan nama produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Jenis Produk</label>
                            <input type="text" name="jenisproduk" class="form-control" value="{{ $produk->jenisproduk}}"  placeholder="Masukan jenis produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control" value="{{ $produk->merk}}"  placeholder="Masukan merk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{ $produk->harga}}"  placeholder="Masukan harga">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ $produk->stok}}"  placeholder="Masukan stok">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}"  placeholder="Masukan kategori">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ $produk->deskripsi}}" placeholder="Masukan deskripsi">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" value="{{ $produk->foto}}" placeholder="Masukan foto">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </form>       
    </body>
    </html>
{{-- @endsection --}}

