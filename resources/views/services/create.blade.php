@extends('layouts.admin')

@section('title')
    <title>Add Services</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Services</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
          	<!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
            <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                    <div class="card">
                    <div class="card-header">
                        <strong>Services</strong>
                        <small>Form</small>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="vat">Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="name" required >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>                                  
                            <textarea name="description" id="description" class="form-control"></textarea>
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Add</button>
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
