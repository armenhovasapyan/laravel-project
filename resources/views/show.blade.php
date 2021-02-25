@extends('layouts/app')

@section('title-section')
    {{$data->subject}}
@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
    <div class="alert alert-info">
        <h3>{{$data->message}}</h3>
        <p>{{$data->email}} - {{$data->name}}</p>
        <p><small>{{$data->created_at}}</small></p>
        <a href="{{route('update-contact', $data->id)}}" class="btn btn-primary">Update</a>
        <a href="{{route('delete-contact', $data->id)}}" class="btn btn-danger">Delete</a>
    </div>
@endsection
