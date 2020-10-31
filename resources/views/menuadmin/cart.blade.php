@extends('admin')
@section('cart')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Keranjang</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Ecommerce </li>
                </ol>
            </div>
            <div class="col-6">
                <!-- Bookmark Start-->
                <div class="bookmark pull-right">
                    <ul>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                                data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                                data-original-title="Icons"><i data-feather="command"></i></a></li>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                                data-original-title="Learning"><i data-feather="layers"></i></a></li>
                        <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                            <form class="form-inline search-form" action="#" method="get">
                                <div class="form-group form-control-search">
                                    <div class="Typeahead Typeahead--twitterUsers">
                                        <div class="u-posRelative">
                                            <input class="demo-input Typeahead-input form-control-plaintext w-100"
                                                type="text" placeholder="Search.." name="q" title="">
                                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                                    class="sr-only">Loading...</span></div>
                                        </div>
                                        <div class="Typeahead-menu"></div>
                                        <script class="result-template" type="text/x-handlebars-template">
                                            <div class="ProfileCard u-cf">                        
                                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                <div class="ProfileCard-details">
                                <div class="ProfileCard-realName"></div>
                                </div>
                                </div>
                              </script>
                                        <script class="empty-template" type="text/x-handlebars-template">
                                            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                                        </script>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
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
                <div class="card-header">
                    <h5>Keranjang</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="order-history table-responsive wishlist">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="" method="POST">
                                        {{ csrf_field() }}
                                        <?php $x=1; ?>
                                        @foreach($data_keranjang as $keranjang)
                                        <tr>
                                            <td><img class="img-fluid img-40"
                                                    src="{{ url('/images/'.$keranjang -> gambar_produk) }}" alt="#">
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <p>{{$keranjang -> nama_produk}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Rp.
                                                    {{$keranjang->harga}}<p>
                                            </td>
                                            <input type="hidden" name="nama_produk[]"
                                                value="{{$keranjang -> nama_produk}}">
                                            <input type="hidden" name="harga_produk[]" value="{{$keranjang->harga}}"
                                                id="txt1_<?php echo $x; ?>" onkeyup="sum(<?php echo $x; ?>);">
                                            <td>
                                                <fieldset class="qty-box">
                                                    <div class="input-group">
                                                        <input class="touchspin text-center" min="1"
                                                            value="{{$keranjang -> jumlah}}" name="jumlah_produk[]"
                                                            value="{{$keranjang->jumlah}}" size="4"
                                                            id="txt2_<?php echo $x; ?>"
                                                            onkeyup="sum(<?php echo $x; ?>);"
                                                            onchange="sum(<?php echo $x; ?>)">
                                                    </div>
                                                </fieldset>
                                            </td>
                                            <td><button class="btn-pil btn-danger btn-xs" type="button"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    data-whatever="@getbootstrap"><i class="fa fa-trash"></i></button>
                                            </td>
                                            <td>
                                                <center>
                                                    <span>Rp.
                                                        <input type="text" readonly id="txt3_<?php echo $x; ?>"
                                                            class="amount" style="border:none" name="total_produk[]"
                                                            value="<?=$keranjang->sub_total?>">
                                                    </span>
                                                </center>
                                                <!-- <p>Rp. {{ number_format($keranjang->sub_total, 2) }}</p> -->
                                            </td>
                                        </tr>
                                        <?php $x++; ?>
                                        @endforeach
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Yakin Data Produk Mau Dihapus ?</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Gak Jadi Deh</button>
                                                        <a href="">
                                                            <button class="btn btn-primary" type="button">Ya Dong
                                                                !</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <tr>
                                        <td class="text-right" colspan="5"><a
                                                class="btn btn-secondary cart-btn-transform" href="#">Tambah Produk</a></td>
                                        <td><a class="btn btn-success cart-btn-transform" href="">Buat Pesanan</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>
    </div>
</div>
<script>
    function sum(row_id) {
        var txtFirstNumberValue = document.getElementById('txt1_' + row_id).value;
        var txtSecondNumberValue = document.getElementById('txt2_' + row_id).value;
        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
        console.log(result);
        if (!isNaN(result)) {
            document.getElementById('txt3_' + row_id).value = result;
        }
    }
</script>
@endsection
