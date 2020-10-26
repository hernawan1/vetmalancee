@extends('admin')
@section('ongkir')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Ongkir Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="truck"></i></a></li>
                    <li class="breadcrumb-item">Tabel Ongkir</li>
                </ol>
            </div>
            <div class="col-6">
                <!-- Bookmark Start-->
                <div class="bookmark pull-right">
                    <button class="btn btn-success active" style="height: 50px;width:180px;" type="button"
                        data-toggle="modal" data-target="#exampleModalfat" data-whatever="@mdo">Tambah Data</button>
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
        <div class="col-sm-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <p>Data ongkir Berhasil Ditambah!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('danger'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data ongkir Sudah Ada!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('update'))
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <p>Data ongkir Berhasil Diperbarui !!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('delete'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data ongkir Telah Dihapus !!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @endif
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kota</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                ?>
                                @foreach($ongkir as $ongkir)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$ongkir->nama_kota_ongkir}}</td>
                                    <td>Rp. {{ number_format($ongkir->harga, 2) }}</td>
                                    <td>
                                        <button class="btn-pil btn-warning btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModalEdit{{$ongkir->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn-pil btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{$ongkir->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalEdit{{$ongkir->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Data Ongkir {{$ongkir->jenis_ongkir}}</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('updateongkir', $ongkir->id)}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                    <div class="form-builder-2">
                                                        <div class="form-group ui-draggable-handle" style="position: static;">
                                                            <label for="formcontrol-select1">Nama Kota :</label>
                                                            <input class="form-control" type="text" name="nama_kota_ongkir" value="{{$ongkir->nama_kota_ongkir}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="recipient-name">Harga ongkir:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="btn btn-primary">Rp.</span></div>
                                                            <input id="prependedtext" name="harga" class="form-control btn-square" placeholder="Harga"
                                                                type="text" value="{{$ongkir->harga}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary" type="submit">Update Data</button>
                                                    </div>
                                                </form>
                                            </div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal{{$ongkir->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Ongkir Kota {{$ongkir->nama_kota_ongkir}} Mau Dihapus ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Gak Jadi Deh</button>
                                                    <a href="{{route('deleteongkir', $ongkir->id)}}">
                                                        <button class="btn btn-primary" type="button">Ya Dong !</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php
                                $no++
                                ?>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kota</th>
                                    <th>Harga</th>
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form Data Ongkir</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addongkir')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Nama Kota :</label>
                            <input class="form-control" type="text" name="nama_kota_ongkir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Harga ongkir:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="btn btn-primary">Rp.</span></div>
                            <input id="prependedtext" name="harga" class="form-control btn-square" placeholder="Harga"
                                type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Tambah Data</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
