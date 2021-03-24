@extends("admin.layouts.app")

@section("content")
<h4 class="c-grey-900 mT-10 mB-10 pL-15">Create Buku</h4>
<div>
    <form method="POST" action="{{ route('admin.buku.store') }}" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="nama_buku">Nama Buku <sup style='color:red'>*</sup></label> 
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="{{ old('nama_buku') }}">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
