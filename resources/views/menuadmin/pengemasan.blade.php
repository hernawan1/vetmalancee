@extends('admin')
@section('pengemasan')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Pengemasan Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="package"></i></a></li>
                    <li class="breadcrumb-item">Tabel Pengemasan</li>
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
                    <p>Data Pengemasan Berhasil Ditambah!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('danger'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data Pengemasan Sudah Ada!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('update'))
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <p>Data Pengemasan Berhasil Diperbarui !!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('delete'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data Pengemasan Telah Dihapus !!</p>
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
                                    <th>Jenis Pengemasan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                ?>
                                @foreach($pengemasan as $kemasan)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$kemasan->jenis_pengemasan}}</td>
                                    <td>Rp. {{ number_format($kemasan->harga_pengemasan, 2) }}</td>
                                    <td>
                                        <button class="btn-pil btn-warning btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModalEdit{{$kemasan->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn-pil btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{$kemasan->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalEdit{{$kemasan->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Data Pengemasan {{$kemasan->jenis_pengemasan}}</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('updatepengemasan', $kemasan->id)}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                    <div class="form-builder-2">
                                                        <div class="form-group ui-draggable-handle" style="position: static;">
                                                            <label for="formcontrol-select1">Jenis Kemasan:</label>
                                                            <select class="form-control btn-square" id="formcontrol-select1" name="jenis_pengemasan">
                                                                <option value="{{$kemasan->jenis_pengemasan}}">{{$kemasan->jenis_pengemasan}}</option>
                                                                <option value="Besar">Besar</option>
                                                                <option value="Sedang">Sedang</option>
                                                                <option value="Kecil">Kecil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="recipient-name">Harga Pengemasan:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="btn btn-primary">Rp.</span></div>
                                                            <input id="prependedtext" name="harga_pengemasan" class="form-control btn-square" placeholder="Harga"
                                                                type="text" value="{{$kemasan->harga_pengemasan}}">
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
                                    <div class="modal fade" id="exampleModal{{$kemasan->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Pengemasan {{$kemasan->jenis_pengemasan}} Mau Dihapus ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Gak Jadi Deh</button>
                                                    <a href="{{route('deletepengemasan', $kemasan->id)}}">
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
                                    <th>Jenis Pengemasan</th>
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
                <h5 class="modal-title" id="exampleModalLabel2">Form Tambah Kategori Kemasan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addpengemasan')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Jenis Kemasan:</label>
                            <select class="form-control btn-square" id="formcontrol-select1" name="jenis_pengemasan">
                                <option value="">Pilih...</option>
                                <option value="Besar">Besar</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Kecil">Kecil</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Harga Pengemasan:</label>
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
