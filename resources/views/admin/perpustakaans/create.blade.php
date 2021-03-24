@extends("admin.layouts.app")

@section("content")
<h4 class="c-grey-900 mT-10 mB-10 pL-15">Create Perpustakaan</h4>
<div>
    <form method="POST" action="{{ route('admin.perpustakaan.store') }}" enctype="multipart/form-data">
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
                        <label for="nama_perpustakaan">Nama Perpustakaan <sup style='color:red'>*</sup></label> 
                        <input type="text" class="form-control" id="nama_perpustakaan" name="nama_perpustakaan" value="{{ old('nama_perpustakaan') }}">
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
