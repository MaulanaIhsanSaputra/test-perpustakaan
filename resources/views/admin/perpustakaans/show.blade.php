@extends("admin.layouts.app")

@section("content")

<h4 class="c-grey-900 mT-10 mB-10 pL-15">Editing Perpustakaan</h4>
<div>
    <form method="POST" action="{{ route('admin.perpustakaan.update', $perpustakaan->id) }}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        {{ Session::get('success_message') }}
                    </div>
                @endif

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
                        <input type="text" class="form-control" id="nama_perpustakaan" name="nama_perpustakaan" value="{{ $perpustakaan->nama_perpustakaan }}">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.perpustakaan.destroy', ['id' => $perpustakaan->id]) }}" method="POST" id='delete-Form'>
        {{ method_field("DELETE") }}
        @csrf 
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4>Delete Perpustakaan</h4>
                <p>Permanently delete this Perpustakaan.</p>
                <script>
                    function confirmDelete() {
                        if(confirm("Are you sure you want to delete this Perpustakaan?")) {
                            document.getElementById('delete-Form').submit();
                        }
                    }
                </script>
                <button type="submit" class="btn btn-danger" onclick='event.preventDefault();confirmDelete()'>Delete</button>
            </div>
        </div>
    </form>
</div>
@stop
