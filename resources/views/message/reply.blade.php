
@extends('layouts.admin')

@section('title')
    <title>Mass Upload</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Messages</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
          	<!-- ARAH ACTIONYA ADALAH KE ROUTING DENGAN NAME product.saveBulk -->
            <form action="{{ route('message.update', $messages->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <div class="form-group">
                                    <label for="file">Name</label>
                                    <input type="name" name="name" class="form-control" value="{{ $messages->name}}" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" value="{{ $messages->email}}" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">update</button>
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