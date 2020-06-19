@extends('layouts.admin')

@section('title')
    <title>Update Experience</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Experience</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('experience.update', $experience->id) }}" method="post" enctype="multipart/form-data" >
            @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                    <div class="card">
                    <div class="card-header">
                        <strong>Experience</strong>
                        <small>Form</small>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="vat"><b>Name</b></label>
                            <input class="form-control" id="name" name="name" type="text" value="{{$experience->name}}" required >
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Description</b></label>                                  
                            <textarea name="description" id="description" class="form-control">{{$experience->description}}</textarea>
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
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/jQuery/jquery.3-3-1.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/bootstrap-datepicker.js')}}"></script>
@section('js')
    <!-- LOAD CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        //TERAPKAN CKEDITOR PADA TEXTAREA DENGAN ID DESCRIPTION
        CKEDITOR.replace('description');
    </script>
@endsection
