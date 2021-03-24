@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        @foreach($perpustakaan as $perpus)
                        <h5 class="card-title">{{ $perpus->nama_perpustakaan }}</h5>
                        @endforeach
                        @foreach ($buku as $b)
                        <div class="col-sm-6" style="padding: 15px;">
                            <div class="card" style="width: 8rem; margin: 0px -24px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding: 15px">
                            <div class="card" style="width: 8rem; margin: -110px 116px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        @foreach($perpustakaan as $perpus)
                        <h5 class="card-title">{{ $perpus->nama_perpustakaan }}</h5>
                        @endforeach
                        @foreach ($buku as $b)
                        <div class="col-sm-6" style="padding: 15px;">
                            <div class="card" style="width: 8rem; margin: 0px -24px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding: 15px">
                            <div class="card" style="width: 8rem; margin: -110px 116px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        @foreach($perpustakaan as $perpus)
                        <h5 class="card-title">{{ $perpus->nama_perpustakaan }}</h5>
                        @endforeach
                        @foreach ($buku as $b)
                        <div class="col-sm-6" style="padding: 15px;">
                            <div class="card" style="width: 8rem; margin: 0px -24px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding: 15px">
                            <div class="card" style="width: 8rem; margin: -110px 116px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$b->nama_buku}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
