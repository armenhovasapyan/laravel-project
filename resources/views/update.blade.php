@extends('layouts/app')

@section('title-section')
    Edit {{$data->subject}}
@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
    <form action="{{ route('update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter email" class="form-control" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Enter subject" class="form-control" value="{{$data->subject}}">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>

    </form>
@endsection
