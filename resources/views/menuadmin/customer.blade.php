@extends('admin')
@section('customer')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Customer Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="user"></i></a></li>
                    <li class="breadcrumb-item">Tabel Customer</li>
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
                    <p>Data Customer Berhasil Ditambah!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('danger'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data Customer Sudah Ada!!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('update'))
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <p>Data Customer Berhasil Diperbarui !!!</p>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                @elseif($message = Session::get('delete'))
                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                    <p>Data Customer Telah Dihapus !!</p>
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
                                    <th>Nama</th>
                                    <th>No. Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                ?>
                                @foreach($customer as $customer)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$customer->nama}}</td>
                                    <td>{{$customer->telepon}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->alamat}}</td>
                                    <td>
                                        <center><img width="150" src="{{ url('/images/'.$customer->gambar) }}"></center>
                                    </td>
                                    <td>
                                        <button class="btn-pil btn-warning btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModalEdit{{$customer->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn-pil btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{$customer->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalEdit{{$customer->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Data Customer {{$customer->nama}}</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('updatecustomer', $customer->id)}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Nama :</label>
                                                    <input class="form-control" type="text" name="nama" value="{{$customer->nama}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="recipient-name">Gambar User :</label>
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="input-file-1">File input</label>
                                                    <input id="input-file-1" type="file" name="gambar">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">No. Telp :</label>
                                                    <input class="form-control" type="text" name="telepon" value="{{$customer->telepon}}">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Email :</label>
                                                    <input class="form-control" type="email" name="email" value="{{$customer->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Alamat :</label>
                                                <textarea name="alamat" class="form-control" rows="3">{{$customer->alamat}}</textarea>
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
                                    <div class="modal fade" id="exampleModal{{$customer->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Customer {{$customer->nama}} Mau Dihapus ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Gak Jadi Deh</button>
                                                    <a href="{{route('deletecustomer', $customer->id)}}">
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
                                    <th>Nama</th>
                                    <th>No. Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form Data Customer</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addcustomer')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Nama :</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Gambar User :</label>
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="input-file-1">File input</label>
                            <input id="input-file-1" type="file" name="gambar">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">No. Telp :</label>
                            <input class="form-control" type="text" name="telepon">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Email :</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat :</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
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
