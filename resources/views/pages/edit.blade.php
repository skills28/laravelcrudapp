@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>
<div class="row">

<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
        <div class="card">
         <div class="card-header bg-success"><h5> <b>Edit Old Post?</b> </h5></div>
         <div class="card-body">


           {!! Form::open(['action' => ['PostController@update' , $post->id] , 'method' =>'POST']) !!}

            <div class="form-group">
             {{Form::label('title', 'Post Title')}}
             {{Form::text('title', $post->title , ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
             {{Form::label('details', 'Post Details')}}
             {{Form::textArea('details', $post->details , ['class' => 'form-control'])}}
            </div>

            {{ Form::hidden('_method' , 'PUT')}}
            {{
              Form::submit('Edit Post' , ['class' => 'btn btn-success float-right'])
            }}
           {!! Form::close() !!}

</div>
</div>
</div>
</div>
@endsection
