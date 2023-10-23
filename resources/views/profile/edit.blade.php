@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('profile.update', $user)}}" method="POST">
                    @method('PUT')
                    @csrf

                    <label for="name">Naam</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{$user->name}}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" id="email" name="email" value="{{$user->email}}">
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <input class="btn btn-primary mt-2" type="submit" value="Opslaan">
                </form>
                <a class="btn btn-primary mt-2" href="{{route('home')}}">Ga terug</a>
            </div>
        </div>
    </div>
@endsection
