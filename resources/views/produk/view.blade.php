@extends('admin')
@section('produk')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Detail Produk</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="box"></i></a></li>
                    <li class="breadcrumb-item">Tabel Produk</li>
                </ol>
            </div>
            <div class="col-6">
                <!-- Bookmark Start-->
                
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
                <div class="col-xl-12">
                  <form class="card" action="/produk/update/{{$produk->id}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="card-header">
                      <h4 class="card-title mb-0">Detail Produk</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group mb-3">
                          
                            <label class="form-label">Nama Produk</label>
                            <input class="form-control" type="text" value="{{$produk->nama}}" name="nama">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group mb-3">
                            <label class="form-label">Stock Produk</label>
                            <input class="form-control" type="number" value="{{$produk->stock}}" name="stock">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input class="form-control" type="text" value="{{$produk->harga}}" name="harga">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label class="form-label">Kode Produksi Produk</label>
                            <input class="form-control" type="text" value="{{$produk->code_produksi}}" name="code_produksi">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label class="form-label">Tanggal Kadaluarsa</label>
                            <input class="form-control" type="date" value="{{$produk->tgl_exp}}" name="tgl_exp">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label for="formcontrol-select1">Wadah Produk:</label>
                                <select class="form-control btn-square" name="wadah">
                                    <option value="{{$produk->wadah}}">{{$produk->wadah}}</option>
                                    <option value="Vaksin">Vaksin</option>
                                    <option value=""></option>
                                    <option value="k"></option>
                                </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                          <label for="inputState">Jenis Kategori</label>
                            <select id="inputState" class="form-control" name="jenis_kategori">
                                <option value="{{$produk->jenis_kategori}}">{{$produk->jenis_kategori}}</option>
                                <option value="antisera">Antisera</option>
                                <option value="antigen">Antigen</option>
                                <option value="kit elisa">Kit Elisa</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group mb-3">
                            <label class="form-label">Maksimal Wadah Kecil</label>
                            <input class="form-control" type="text" value="{{$produk->maks_kecil}}" name="maks_kecil">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group mb-3">
                            <label class="form-label">Maksimal Wadah Sedang</label>
                            <input class="form-control" type="number" value="{{$produk->maks_sedang}}" name="maks_sedang">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group mb-3">
                            <label class="form-label">Maksimal Wadah Besar</label>
                            <input class="form-control" type="number" value="{{$produk->maks_besar}}" name="maks_besar">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label class="form-label">Satuan Isi</label>
                            <input class="form-control" type="text" value="{{$produk->satuan_isi}}" name="satuan_isi">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                          <label class="form-label">Indikasi Produk</label>
                            <input class="form-control" type="text" value="{{$produk->indikasi}}" name="indikasi">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-3 mb-0">
                            <label class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" rows="5" placeholder="Enter About your description">{{$produk->deskripsi}}</textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-3">
                          <label class="form-label">Gambar Produk</label>
                            <input class="form-control" type="file" value="{{$produk->gambar}}" name="gambar">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/produk"><button class="btn btn-danger" type="submit">Kembali</button></a>
                        <button class="btn btn-primary" type="submit">Update Produk</button>
                    </div>
                  </form>
                  </div>
    </div>
</div>




@endsection
