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
                                    <th>Aturan Dewe Ya Nald wkwk</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form Produk Pusvetma</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
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
                        <label class="col-form-label" for="recipient-name">Code Produksi:</label>
                        <input class="form-control" name="code_produksi" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Tanggal Expiyed:</label>
                        <div class="input-group">
                            <input class="datepicker-here form-control" name="tgl_exp" type="text"
                                data-position="bottom right" data-language="en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Dosis:</label>
                        <input class="form-control" name="dosis" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Satuan Isi:</label>
                        <input class="form-control" name="satuan_isi" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Kategori Produk:</label>
                        <input class="form-control" name="satuan_isi" value="Vaksin" disabled type="text">
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Wadah Produk:</label>
                            <select class="form-control btn-square" id="formcontrol-select1">
                                <option value="">Pilih...</option>
                                <option value="Vaksin">Vaksin</option>
                                <option value=""></option>
                                <option value="k"></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Rasio Sedang:</label>
                        <input class="form-control" name="satuan_isi" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Rasio Kecil:</label>
                        <input class="form-control" name="satuan_isi" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Rasio Besar:</label>
                        <input class="form-control" name="satuan_isi" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="message-text">Deskripsi</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Tambah Data</button>
            </div>
        </div>
    </div>
</div>
@endsection
