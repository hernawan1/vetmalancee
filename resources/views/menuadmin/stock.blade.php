@extends('admin')
@section('stock')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Stock Produk {{$nama}}</h3>
            </div>
            <div class="col-6">
                <!-- Bookmark Start-->
                <div class="bookmark pull-right">
                    <button class="btn btn-success active" style="height: 50px;width:180px;" type="button"
                        data-toggle="modal" data-target="#exampleModalfat" data-whatever="@mdo">Tambah Stock</button>
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
            @if ($message = Session::get('berhasil'))
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                <p>Stock Produk Berhasil Ditambah!!!</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            @elseif($message = Session::get('sukses'))
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                <p>Stock Produk Telah Dihapus!!!</p>
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
                                    <th>Code Produksi</th>
                                    <th>tanggal Ecpiyed</th>
                                    <th>Stock</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                ?>
                                @foreach($stock as $stk)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$stk->code_produksi}}</td>
                                    <td>{{$stk->tgl_exp}}</td>
                                    <td>{{$stk->stock}}</td>
                                    <td>
                                    <button class="btn-pil btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModalgetbootstrap{{$stk->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalgetbootstrap{{$stk->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Yakin Data {{$stk->code_produksi}} Mau Dihapus ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger" type="button"
                                                        data-dismiss="modal">Ga Jadi Deh</button>
                                                    <a href="{{route('deletestock', $stk->id)}}">
                                                        <button class="btn btn-primary" type="button">Ya Dong !</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                                <?php
                                $no++
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Code Produksi</th>
                                    <th>tanggal Ecpiyed</th>
                                    <th>Stock</th>
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
                <form action="{{route('addstock')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">ID Produksi:</label>
                        <input class="form-control" name="id" value="{{$id}}" type="text" placeholder="{{$nama}}" readonly>
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
                        <label for="inputEmail4">Stock Produk</label>
                        <input name="stock" type="number" class="form-control" placeholder="Stock Produk">
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
