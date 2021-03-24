@extends("admin.layouts.app")

@section("content")

<h4 class="c-grey-900 mT-10 mB-10 pL-15">Editing Buku</h4>
<div>
    <form method="POST" action="{{ route('admin.buku.update', $buku->id) }}" enctype="multipart/form-data">
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
                        <label for="nama_buku">Nama Buku <sup style='color:red'>*</sup></label> 
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="{{ $buku->nama_buku }}">
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.buku.destroy', ['id' => $buku->id]) }}" method="POST" id='delete-Form'>
        {{ method_field("DELETE") }}
        @csrf 
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4>Delete Buku</h4>
                <p>Permanently delete this Buku.</p>
                <script>
                    function confirmDelete() {
                        if(confirm("Are you sure you want to delete this Buku?")) {
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
