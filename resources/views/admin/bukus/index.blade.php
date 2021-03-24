@extends("admin.layouts.app")

@section("content")
<h4 class="c-grey-900 mT-10 mB-30">Buku</h4>
<div class="row">
    <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h4 class="c-grey-900 mB-20">Manage Buku</h4>
            
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif

            <a href="{{ route('admin.buku.create') }}" class="btn btn-primary mB-30">Create Buku</a>
            <div class='table-responsive'>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $buku)
                            <tr>
                                <td>
                                    {{ $buku->nama_buku }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.buku.show', $buku->id) }}" class="btn btn-primary mB-0">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

