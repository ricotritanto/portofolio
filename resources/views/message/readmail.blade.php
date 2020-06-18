@extends('layouts.admin')

@section('title')
    <title>MailBox</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Messages</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
            <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Folder</h4>
                        </div>
                        <div class="card-body">
                        <ul class="list-group">
                            <a href="#"><li class="list-group-item fa fa-inbox"> Inbox</a></li>
                            <a href="#"><li class="list-group-item fa fa-envelope-o"> Sent</a></li>
                            <a href="#"><li class="list-group-item fa fa-trash-o"> Trash</a></li>
                        </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Read Mail
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
                            
                            <div class="table-responsive">
                                <form>
                                    <div class="form-group">
                                            <h5>{{$messages->subject}}</h5>
                                    </div>
                                    <div class="form-group">
                                        <i> From : {{$messages->email}} </i>
                                        <span class="mailbox-read-time pull-right">{{$messages->updated_at(date('j F, Y h:i:s A'))}}</span>
                                    </div>
                                    <div class="mailbox-controls with-border text-center">
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                                            <i class="fa fa-trash-o"></i></button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                                            <i class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                                            <i class="fa fa-share"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                                        <i class="fa fa-print"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <p>{{$messages->description}}</p>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection