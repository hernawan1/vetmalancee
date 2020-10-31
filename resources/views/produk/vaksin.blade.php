<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>List Produk</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="col-sm-12">
    @if ($message = Session::get('kosong'))
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
        <p>Stock Produk Kosong !!</p>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
    </div>
    @endif
    </div>
</div>
<div class="container-fluid">
    <div class="product-grid">
        <div class="product-wrapper-grid">
            <div class="row">
                @foreach($data_vaksin as $vaksin)
                <a class="col-xl-3 col-sm-6 xl-4" href="{{route('addcart', $vaksin->id)}}" method="POST">
                    <div class="card">
                        <div class="product-box">
                            <div class="product-img">
                                @if($vaksin->stock == 0)
                                <div class="ribbon ribbon-danger">Kosong</div>
                                @endif
                                <center><img width="300" src="{{ url('/images/'.$vaksin->gambar) }}"></center>
                            </div>
                            <div class="product-details">
                                <h4 style="color:#000">{{$vaksin->nama}}</h4>
                                <p style="color:#BBBBBB">Dosis {{$vaksin->dosis}}</p>
                                <div class="product-price">Rp. {{ number_format($vaksin->harga, 2) }}
                                    <span>/ {{$vaksin->wadah}}</span>
                                </div>
                                <div style="font-size: 15px;color:#000">
                                    Stock<span> {{$vaksin->stock}} {{$vaksin->wadah}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
