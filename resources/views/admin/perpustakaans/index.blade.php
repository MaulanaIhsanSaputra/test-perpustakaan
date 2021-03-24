@extends("admin.layouts.app")

@section("content")
<h4 class="c-grey-900 mT-10 mB-30">Perpustakaan</h4>
<div class="row">
    <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h4 class="c-grey-900 mB-20">Manage Perpustakaan</h4>
            
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif

            <a href="{{ route('admin.perpustakaan.create') }}" class="btn btn-primary mB-30">Create Perpustakaan</a>
            <div class='table-responsive'>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Perpustakaan</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perpustakaan as $perpustakaan)
                            <tr>
                                <td>
                                    {{ $perpustakaan->nama_perpustakaan }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.perpustakaan.show', $perpustakaan->id) }}" class="btn btn-primary mB-0">
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

