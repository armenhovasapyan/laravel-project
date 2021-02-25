@extends('layouts/app')

@section('title-section')
    All messages
@endsection

@section('content')
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->name}}</h3>
            <p>{{$el->email}}</p>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{route('show-one-contact', $el->id)}}" class="btn btn-warning">more</a>
        </div>
    @endforeach
@endsection
