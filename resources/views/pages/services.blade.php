@extends('layouts.base')




@section('content')
@include('pages.nav')
    <h1>{{ $title }}</h1>
   

    @if(count($services) > 0)
    <ul>
        @foreach($services as $service)
        <li>{{ $service }}</li>

        @endforeach
        </ul>


    @endif



    <p>This is laravel Services</p>

@endsection