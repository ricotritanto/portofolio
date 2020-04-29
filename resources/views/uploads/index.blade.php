@extends('layouts.admin')

@section('title')
    <title>List Uploads</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Uploads</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                List Uploads
                              
                                <a href="{{ route('uploads.create') }}" class="btn btn-primary btn-sm float-right">Uploads</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <!-- JIKA TERDAPAT FLASH SESSION, MAKA TAMPILAKAN -->

                            <!-- BUAT FORM UNTUK PENCARIAN, METHODNYA ADALAH GET -->
                          
                          
                            <!-- TABLE UNTUK MENAMPILKAN DATA PRODUK -->
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>File</th>                                       
                                            <th>Last Update</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($uploads as $row)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>
                                            <form action="{{route('uploads.show', $row->id) }}" method="get">
                                            @csrf
                                                <a href="{{route('uploads.show', $row->id)}}" data-target="#product"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> lihat</a>
                                             </form>
                                             </td>
                                            <td>{{$row->updated_at}}</td>
                                            <td>
                                                <!-- FORM UNTUK MENGHAPUS DATA PRODUK -->
                                                <form action="{{ route('uploads.destroy', $row->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('uploads.edit', $row->id) }}" class="btn btn-warning btn-sm">Update</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="10" class="text-center">Empty Data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                    Halaman : {{ $uploads->currentPage() }} <br/>
                                    Jumlah Data : {{ $uploads->total() }} 
                            </div>
                            {!! $uploads->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
