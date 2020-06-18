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
                            <a href="{{route('message.index')}}"><li class="list-group-item fa fa-inbox"> Inbox</a></li>
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
                        <form action="{{ route('message.send') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                            <div class="form-group">
                                <label for="vat"><b>To: </b></label>
                                <input class="form-control" placeholder="To:" value="{{$messages->email}}">
                            </div>
                            <div class="form-group">
                                <label for="vat"><b>Subject:</b></label>
                                <input class="form-control" value="Re: {{$messages->description}}">
                            </div>
                            <div class="form-group">
                                <textarea id="description" name="description" class="form-control" style="height: 300px" autofocus>
                                    <br/><br/>
                                    <hr />
                                    <p><b> From: </b>{{$messages->email}} </p>
                                    <p><b> Sent: </b>{{$messages->updated_at->format('l, j F, Y h:i:s A')}} </p>
                                    <p><b> Subject: </b>{{$messages->subject}} </p>
                                    <p>{{$messages->description}} </p>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input type="file" name="attachment">
                                </div>
                                <p class="help-block">Max. 2Mb</p>
                            </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            </div>
                        </form>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
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