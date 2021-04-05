@extends('layouts.app')
@section('content')
<h1>My New Post List?</h1>
<div class="row">

    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">

      @if(count($posts) > 0)
      @foreach($posts as $post)

    <div class="card">
         <div class="card-header bg-dark"><h3>
           <a href="/post/{{$post->id}}/edit"> <b class="text-success">{{$post->title}}</b> </a>
         </h3></div>
         <div class="card-body">
        <p class="text-justify"> {{$post->details}} </p>


        <br>

        {!! Form::open(['action' => ['PostController@destroy' , $post->id] , 'method' =>'POST']) !!}
                  {{ Form::hidden('_method' , 'DELETE')}}
                  {{ Form::submit('Removed' , ['class'=>'btn btn-danger']) }}
        {!! Form::close() !!}

    </div>
    <!-- card-body div end -->
    </div>
    <!-- card div end  -->
    <br>
    @endforeach
    @endif

</div>
<!-- colum div end -->
</div>
<!-- row div end -->
@endsection
