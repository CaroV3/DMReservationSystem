@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$machine->name}}</h1>
                <p>{{$machine->machine_number}}</p>
                <a class="btn btn-primary mr-1" href="{{route('machines.index')}}">Ga terug</a>
                <a class="btn btn-primary" href="{{route('machines.edit', $machine)}}">Edit machine</a>
            </div>
        </div>
    </div>
@endsection
