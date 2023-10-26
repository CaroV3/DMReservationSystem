@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Afspraak met {{$appointment->name}} op {{$appointment->date}} om {{$appointment->time}} </h2>
                <p>Email: {{$appointment->email}}</p>
                <p>Telefoonnummer: {{$appointment->phone_number}}</p>
                <p>Adres: {{$appointment->address}}</p>
                <p>Opmerking: {{$appointment->comment}}</p>
                    <a class="btn btn-primary mr-1" href="{{route('appointments.index')}}">Ga terug</a>
            </div>
        </div>
    </div>
@endsection
