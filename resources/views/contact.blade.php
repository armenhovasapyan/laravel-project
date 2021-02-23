@extends('layouts/app')

@section('title-section')
    Contact page
@endsection

@section('content')
    <h1>Contact</h1>
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Enter subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>

    </form>
@endsection
