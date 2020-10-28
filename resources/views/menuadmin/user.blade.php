@extends('admin')
@section('ongkir')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data User Pusvetma</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item">Tabel User</li>
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
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                ?>
                                @foreach($user as $user)
                                <tr>
                                    <td>
                                        <?=$no?>
                                    </td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->NIP}}</td>
                                    <td>{{$user->jabatan}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>
                                        <button class="btn-pil btn-warning btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModalEdit{{$user->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn-pil btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{$user->id}}" data-whatever="@getbootstrap"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalEdit{{$user->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Data Ongkir {{$user->jenis_ongkir}}</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('updateuser', $user->id)}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Nama :</label>
                                                    <input class="form-control" type="text" name="nama" value="{{$user->nama}}">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">NIP :</label>
                                                    <input class="form-control" type="text" name="NIP" value="{{$user->NIP}}">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Jabatan :</label>
                                                    <input class="form-control" type="text" name="jabatan" value="{{$user->jabatan}}">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Username :</label>
                                                    <input class="form-control" type="text" name="username" value="{{$user->username}}">
                                                </div>
                                            </div>
                                            <div class="form-builder-2">
                                                <div class="form-group ui-draggable-handle" style="position: static;">
                                                    <label for="formcontrol-select1">Password :</label>
                                                    <input class="form-control" type="password" name="password">
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
                                    <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Data Ongkir Kota {{$user->nama_kota_ongkir}} Mau Dihapus ?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Gak Jadi Deh</button>
                                                    <a href="{{route('deleteuser', $user->id)}}">
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
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
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
                <h5 class="modal-title" id="exampleModalLabel2">Form Data User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('adduser')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Nama :</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">NIP :</label>
                            <input class="form-control" type="text" name="NIP">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Jabatan :</label>
                            <input class="form-control" type="text" name="jabatan">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Username :</label>
                            <input class="form-control" type="text" name="username">
                        </div>
                    </div>
                    <div class="form-builder-2">
                        <div class="form-group ui-draggable-handle" style="position: static;">
                            <label for="formcontrol-select1">Password :</label>
                            <input class="form-control" type="password" name="password">
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
