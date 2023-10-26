@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <a class="btn btn-primary m-2" href="{{route('home')}}">Ga terug</a>
        @else
            <a class="btn btn-primary m-2" href="{{route('home')}}">Ga terug</a>
            <a class="btn btn-primary" href="{{route('machines.create')}}">Voeg machine toe</a>
        @endguest
        <div class="row">
            @foreach($machines as $machine)
                <div class="col-sm-6">
                    <div class="card m-2">
                        <div class="card-header">
                            <h2>{{$machine->name}}</h2>
                        </div>
                        <div class="card-body">
                            <p>Machinenummer: {{$machine->machine_number}}</p>
                            <p>Categorie: {{$machine->category->name}}</p>
                        </div>
                        <div class="card-footer">
                                <a class="btn btn-outline-primary mr-1" href="{{route('machines.show', $machine)}}">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection



