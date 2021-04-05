@extends('layouts.app')
@section('content')
<h1>Create New Post</h1>
<div class="row">

    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
        <div class="card">
         <div class="card-header bg-success"><h5> <b>New Create Post?</b> </h5></div>
         <div class="card-body">

{!! Form::open(['action' => 'PostController@store','method' => 'POST']) !!}

   <div class="form-group">
    {{Form::label('title', 'Post Title')}}
    {{Form::text('title', '' , ['class' => 'form-control' , 'placeholder' => 'Post Title'])}}
   </div>

   <div class="form-group">
    {{Form::label('details', 'Post Details')}}
    {{Form::textArea('details', '' , ['class' => 'form-control' , 'placeholder' => 'Post Details'])}}
   </div>

   {{
     Form::submit('Create Post' , ['class' => 'btn btn-primary float-right'])
   }}

{!! Form::close() !!}

         </div>
       </div>
     </div>

</div>
@endsection
