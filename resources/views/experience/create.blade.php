@extends('layouts.admin')

@section('title')
    <title>Add Experience</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Experience</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
          
          	<!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
            <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
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
                            <input class="form-control" id="name" name="name" type="text" placeholder="name" required >
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Description</b></label>                                  
                            <textarea name="description" id="description" class="form-control"></textarea>
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="name"><b>Date</b></label>
                            <div class="input-group" >
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" name="firstdate" class="form-control" id='date' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name"><b>Until</b></label>
                            <div class="input-group" >
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" name="lastdate" class="form-control" id='date2' required>
                            </div>
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
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/jQuery/jquery.3-3-1.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/bootstrap-datepicker.js')}}"></script>
<script>
  $(function () {
   $( "#date" ).datepicker({
    format: "dd-mm-yyyy",
    weekStart: 0,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true,
    rtl: true,
    orientation: "auto"
    });
    $( "#date2").datepicker({
    format: "dd-mm-yyyy",
    weekStart: 0,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true,
    rtl: true,
    orientation: "auto"
    });
  })
</script>
@section('js')
    <!-- LOAD CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        //TERAPKAN CKEDITOR PADA TEXTAREA DENGAN ID DESCRIPTION
        CKEDITOR.replace('description');
    </script>
@endsection
