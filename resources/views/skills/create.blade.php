@extends('layouts.admin')

@section('title')
    <title>Add Skills</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Skills</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
          	<!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
            <form action="{{ route('skills.store') }}" method="post" enctype="multipart/form-data" >
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
                            <label for="progress">Progress</label>
                            <input type="number" id="progress" name="progress" class="form-control" required>
                            <p class="text-danger">{{ $errors->first('progress') }}</p>
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
