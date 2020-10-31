@extends('admin')
@section('pos')
<style>
    .coba {
        margin: 10px;
        border: none;
        width:269px;
        background-color: #fff;
        -webkit-trnsition: all 0.3s ease;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 0 20px rgba(8, 21, 66, 0.05);
        box-shadow: 0 0 20px rgba(8, 21, 66, 0.05);
    }

</style>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6" style="margin:10px">
                <h3>Kategeori Produk</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item coba"><a class="nav-link active" style="height: 60px;"
                id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                aria-selected="true">
                <center style="margin:5px"><h3>Vaksin</h3></center>
                <div class="media"></div>
            </a></li>
        <li class="nav-item coba"><a class="nav-link" style="height: 60px;" id="pills-profile-tab"
                data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                <center style="margin:5px"><h3>Antigen</h3></center>
            </a></li>
        <li class="nav-item coba"><a class="nav-link" style="height: 60px;" id="pills-contact-tab"
                data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                <center style="margin:5px"><h3>Antisera</h3></center>
            </a></li>
        <li class="nav-item coba"><a class="nav-link" style="height: 60px;" id="pills-contact-tab"
                data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                <center style="margin:5px"><h3>Kit Elisa</h3></center>
            </a></li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-bayar" role="tabpanel" aria-labelledby="pills-bayar-tab">
            @include('produk.vaksin')
        </div>
        <div class="tab-pane fade" id="pills-proses" role="tabpanel" aria-labelledby="pills-proses-tab">
            @include('viewtracking.proses')
        </div>
        <div class="tab-pane fade" id="pills-pengiriman" role="tabpanel" aria-labelledby="pills-pengiriman-tab">
            @include('viewtracking.pengiriman')
        </div>
        <div class="tab-pane fade" id="pills-selesai" role="tabpanel" aria-labelledby="pills-selesai-tab">
            @include('viewtracking.selesai')
        </div>
    </div>

</div>
@endsection
