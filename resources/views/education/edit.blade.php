@extends('layouts.admin')

@section('title')
    <title>Update Education</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Education</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
            <form action="{{ route('education.update', $education->id) }}" method="post" enctype="multipart/form-data" >
            @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                    <div class="card">
                    <div class="card-header">
                        <strong>Education</strong>
                        <small>Form</small>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="vat">Name</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{$education->name}}" required >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>                                  
                            <textarea name="description" id="description" class="form-control">{{$education->description}}</textarea>
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Update</button>
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
