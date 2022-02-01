@extends('layouts.app')



@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Content</h1>
        <p class="lead">we wiil help you if you need</p>
    </div>
</div>

@include('partials.errors')
@if(session('message'))
<div class="alert alert-success" role="alert">
    <strong>{{session('message')}}</strong>
</div>
@endif

<div class="container">
    <form action="{{route('contacts.send')}}" method="post">
        @csrf
        <div>
            <div class="row">
                <div class="col">
                    <label for="name " class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Mario" aria-describedat="nameHelper" value="{{ old('name') }}">
                    <small id="nameHelper" class="text-muted">type your name </small>
                </div>
                <div class="col">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Mario" aria-describedat="email Helper" required value="{{ old('email') }}">
                    <small id="emailHelper" class="text-muted">type your name </small>
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="5">
            {{ old('message') }}"
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100 text-white">send</button>
    </form>
</div>
@stop