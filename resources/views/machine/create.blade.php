@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('machines.store')}}" method="POST">

                    @csrf

                    <label for="name">Naam</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="machine-number">Machine nummer</label>
                    <input class="form-control @error('machine_number') is-invalid @enderror" type="text" id="machine-number" name="machine_number">
                    @error('machine_number')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <input class="btn btn-primary mt-2" type="submit" value="Voeg toe">
                </form>
                <a class="btn btn-primary mt-2" href="{{route('login')}}">Ga terug</a>
            </div>
        </div>
    </div>
@endsection
