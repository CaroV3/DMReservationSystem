@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('appointments.store')}}" method="POST">

                    @csrf

                    <label for="name">Naam</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" id="email" name="email">
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="phone_number">Telefoonnummer</label>
                    <input class="form-control @error('phone_number') is-invalid @enderror" type="text" id="phone_number" name="phone_number">
                    @error('phone_number')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="address">Adres</label>
                    <input class="form-control @error('address') is-invalid @enderror" type="text" id="address" name="address">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="time">Tijd</label>
                    <input class="form-control @error('time') is-invalid @enderror" type="time" id="time" name="time">
                    @error('time')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="date">Datum</label>
                    <input class="form-control @error('date') is-invalid @enderror" type="date" id="date" name="date">
                    @error('date')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="comment">Opmerking</label>
                    <input class="form-control @error('comment') is-invalid @enderror" type="text" id="comment" name="comment">
                    @error('comment')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <p class="mt-3">Maak een afspraak met:</p>
                    @foreach($users as $user)
                        <input type="radio" id="{{$user->name}}" name="user_id" value="{{$user->id}}">
                        <label for="{{$user->name}}">{{$user->name}}</label><br>
                    @endforeach

                    <input class="btn btn-primary mt-3" type="submit" value="Maak afspraak">
                </form>
                <a class="btn btn-primary mt-2" href="{{route('machines.index')}}">Ga terug</a>
            </div>
        </div>
    </div>
@endsection
