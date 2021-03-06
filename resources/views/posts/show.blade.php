@extends('layouts.base')


@include('pages.nav')

@section('content')


<a href='/posts' class='btn btn-default'>GoBack</a>


<h1>{{ $post->title }}</h1>
<div>
{{ $post->body }}
</div>
<hr>
<small>Written on {{ $post->created_at }}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class='btn btn-default'>Edit</a>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST','class' => 'pull-right']) !!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('delete',['class' => 'btn btn-danger'])}}



{!! Form::close() !!}





@endsection


<style>
.container{
    width:60%;
}

</style>