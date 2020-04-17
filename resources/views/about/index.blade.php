@extends('layouts.admin')

@section('title')
    <title>About </title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">About</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
          	<!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
            <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add About</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="description">Description</label>                                  
                                    <!-- TAMBAHKAN ID YANG NNTINYA DIGUNAKAN UTK MENGHUBUNGKAN DENGAN CKEDITOR -->
                                    <textarea name="description" id="description" class="form-control">{{$about->description}}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>     
                                   
                </div>
                
            </form>
        </div>
    </div>
</main>
@endsection

@section('js')
    <!-- LOAD CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        //TERAPKAN CKEDITOR PADA TEXTAREA DENGAN ID DESCRIPTION
        CKEDITOR.replace('description');
    </script>
@endsection