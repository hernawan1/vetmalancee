@extends('admin')
@section('produk')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Produk Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="box"></i></a></li>
                    <li class="breadcrumb-item">Tabel Produk</li>
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
                            <!-- <tbody>
                                @foreach($produk as $produk)
                                <?php
                                $no=1;
                                ?>
                                <tr>
                                    <td><?$no?></td>
                                    <td>{{$produk->nama}}</td>
                                    <td>{{$produk->stock}}</td>
                                    <td>{{$produk->dosisi}}</td>
                                    <td>{{$produk->wadah}}</td>
                                    <td>
                                        <center><img width="150" src="{{ url('/images/'.$produk->gambar) }}"></center>
                                    </td>
                                    <td>Rp. {{ number_format($produk>harga, 2) }}</td>
                                    <td>
                                        <a href="/produk/view/{{$produk->id}}"><button
                                                class="btn-pil btn-warning btn-xs"><i
                                                    class="fa fa-pencil"></i></button></a>
                                        <button class="btn-pil btn-danger btn-xs" data-toggle="modal"
                                            data-target="#exampleModalCoba"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                                $no++
                                ?>
                                @endforeach
                            </tbody> -->
                            <tfoot>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Jenis Kategori</th>
                                    <th>Kode Produksi</th>
                                    <th>Tanggal Kadaluarsa</th>
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
                <form action="/produk/create" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        {{csrf_field()}}
                        <label class="col-form-label" for="recipient-name">Nama Produk:</label>
                        <input class="form-control" placeholder="Nama Produk" name="nama" type="text">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Stock Produk</label>
                        <input name="stock" type="number" class="form-control" placeholder="Stock Produk">
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
                        <label class="col-form-label" for="recipient-name">Kode Produksi:</label>
                        <input class="form-control" name="code_produksi" type="text" placeholder="Kode Produksi Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                        <input name="tgl_exp" type="date" class="form-control">
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
                        <label for="inputState">Jenis Kategori</label>
                        <select id="inputState" class="form-control" name="jenis_kategori">
                            <option>Pilih Jenis Kategori</option>
                            <option value="vaksin">Vaksin</option>
                            <option value="antisera">Antisera</option>
                            <option value="antigen">Antigen</option>
                            <option value="kit elisa">Kit Elisa</option>
                        </select>
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCoba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form Produk Pusvetma</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="/produk/create" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        {{csrf_field()}}
                        <label class="col-form-label" for="recipient-name">Nama Produk:</label>
                        <input class="form-control" placeholder="Nama Produk" name="nama" type="text">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Stock Produk</label>
                        <input name="stock" type="number" class="form-control" placeholder="Stock Produk">
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
                        <label class="col-form-label" for="recipient-name">Kode Produksi:</label>
                        <input class="form-control" name="code_produksi" type="text" placeholder="Kode Produksi Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                        <input name="tgl_exp" type="date" class="form-control">
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
                        <label for="inputState">Jenis Kategori</label>
                        <select id="inputState" class="form-control" name="jenis_kategori">
                            <option>Pilih Jenis Kategori</option>
                            <option value="vaksin">Vaksin</option>
                            <option value="antisera">Antisera</option>
                            <option value="antigen">Antigen</option>
                            <option value="kit elisa">Kit Elisa</option>
                        </select>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Wadah Produk:</label>
                            <select class="form-control btn-square" name="wadah">
                                <option value="">Pilih...</option>
                                <option value="Vaksin">Vaksin</option>
                                <option value=""></option>
                                <option value="k"></option>
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
