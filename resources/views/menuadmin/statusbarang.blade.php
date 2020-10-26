@extends('admin')
@section('statusbarang')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Status Barang</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item col-sm-8 col-xl-3 col-lg-6">
            <a class="" id="pills-bayar-tab" data-toggle="pill" href="#pills-bayar" role="tab"
                aria-controls="pills-bayar" aria-selected="true">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                            <div class="media-body"><span class="m-0">Belum Dibayar</span>
                                <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="nav-item col-sm-8 col-xl-3 col-lg-6">
            <a id="pills-proses-tab" data-toggle="pill" href="#pills-proses"
                role="tab" aria-controls="pills-proses" aria-selected="false">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="clock"></i></div>
                            <div class="media-body"><span class="m-0">Sedang Diproses</span>
                                <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="clock"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="nav-item col-sm-8 col-xl-3 col-lg-6">
            <a id="pills-pengiriman-tab" data-toggle="pill" href="#pills-pengiriman"
                role="tab" aria-controls="pills-pengiriman" aria-selected="false">
                <div class="card o-hidden">
                    <div class="bg-warning b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="truck"></i></div>
                            <div class="media-body"><span class="m-0">Pengiriman</span>
                                <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="truck"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="nav-item col-sm-8 col-xl-3 col-lg-6">
            <a id="pills-selesai-tab" data-toggle="pill" href="#pills-selesai"
                role="tab" aria-controls="pills-selesai" aria-selected="false">
                <div class="card o-hidden">
                    <div class="bg-success b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="check-circle"></i></div>
                            <div class="media-body"><span class="m-0">Selesai</span>
                                <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-bayar" role="tabpanel" aria-labelledby="pills-bayar-tab">
           @include('viewtracking.belumdibayar')
        </div>
        <div class="tab-pane fade" id="pills-proses" role="tabpanel" aria-labelledby="pills-proses-tab">
            <p class="mb-0 m-t-30">diproses</p>
        </div>
        <div class="tab-pane fade" id="pills-pengiriman" role="tabpanel" aria-labelledby="pills-pengiriman-tab">
            <p class="mb-0 m-t-30">pengiriman</p>
        </div>
        <div class="tab-pane fade" id="pills-selesai" role="tabpanel" aria-labelledby="pills-selesai-tab">
            <p class="mb-0 m-t-30">selesai</p>
        </div>
    </div>

</div>
@endsection
