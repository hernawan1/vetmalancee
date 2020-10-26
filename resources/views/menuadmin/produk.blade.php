@extends('admin')
@section('produk')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Produk Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="box"></i></a></li>
                    <li class="breadcrumb-item">Tabel {{$kategori}}</li>
                </ol>
            </div>
            <div class="col-6">
                <!-- Bookmark Start-->
                <div class="bookmark pull-right">
                    <button class="btn btn-success active" style="height: 50px;width:180px;" type="button"
                        data-toggle="modal" data-target="#exampleModalfat" data-whatever="@mdo">Tambah Produk</button>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                <p>Data Produk Berhasil Ditambah!!!</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            @elseif($message = Session::get('danger'))
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                <p>Data Produk Sudah Ada!!!</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            @endif
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Stock</th>
                                    <th>Dosis</th>
                                    <th>Wadah</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                ?>
                                @foreach($produk as $prdk)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$prdk->nama}}</td>
                                    @if($prdk->stock == null)
                                    <td>0</td>
                                    @else
                                    <td>{{$prdk->stock}}</td>
                                    @endif
                                    <td>{{$prdk->dosis}}</td>
                                    <td>{{$prdk->wadah}}</td>
                                    <td>
                                        <center><img width="150" src="{{ url('/images/'.$prdk->gambar) }}"></center>
                                    </td>
                                    <td>Rp. {{ number_format($prdk->harga, 2) }}</td>
                                    <td>
                                        <a href="{{route('stock', $prdk->id)}}"><button class="btn-pil btn-primary btn-xs"><i
                                                    class="fa fa fa-inbox"></i></button></a>
                                        <a href=""><button class="btn-pil btn-warning btn-xs"><i
                                                    class="fa fa-pencil"></i></button></a>
                                        <button class="btn-pil btn-danger btn-xs" data-toggle="modal"
                                            data-target="#exampleModalCoba"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                                $no++
                                ?>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Stock</th>
                                    <th>Dosis</th>
                                    <th>Wadah</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form Produk Pusvetma</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addproduk')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Nama Produk:</label>
                        <input class="form-control" placeholder="Nama Produk" name="nama" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Harga Produk:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="btn btn-primary">Rp.</span></div>
                            <input id="prependedtext" name="harga" class="form-control btn-square" placeholder="Harga"
                                type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Gambar Produk:</label>
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="input-file-1">File input</label>
                            <input id="input-file-1" type="file" name="gambar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Dosis Produk:</label>
                        <input class="form-control" name="dosis" type="text" placeholder="Dosis Pemakaian Produk">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Satuan Isi Produk:</label>
                        <input class="form-control" name="satuan_isi" type="text" placeholder="Satuan Isi Produk">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Indikasi Produk :</label>
                        <input class="form-control" name="indikasi" type="text" placeholder="Indikasi Produk">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Kategori :</label>
                        <input class="form-control" name="jenis_kategori" value="{{$kategori}}" type="text"
                            placeholder="Indikasi Produk" readonly>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Wadah Produk:</label>
                            <select class="form-control btn-square" name="wadah">
                                <option value="Botol">Botol</option>
                                <option value="Vial">Vial</option>
                                <option value="Kit">Kit</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maksimal di Kemasal Kecil</label>
                        <input name="maks_kecil" type="number" class="form-control"
                            placeholder="Maksimal di Kemasan Kecil">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maksimal di Kemasal Sedang</label>
                        <input name="maks_sedang" type="number" class="form-control"
                            placeholder="Maksimal di Kemasan Sedang">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maksimal di Kemasal Besar</label>
                        <input name="maks_besar" type="number" class="form-control"
                            placeholder="Maksimal di Kemasan Besar">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Tambah Produk">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
