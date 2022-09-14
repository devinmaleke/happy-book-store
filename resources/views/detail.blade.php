@extends('template.template')
@section('content')
<div>

    <p>Title : {{$data->title}}</p>
    <p>Author : {{$data->author}}</p>
    <p>Publisher : {{$data->publisher}}</p>
    <p>Year : {{$data->year}}</p>
    <p>Description</p>
    <p style="text-align:justify">{{$data->description}}</p>
</div>
@endsection
