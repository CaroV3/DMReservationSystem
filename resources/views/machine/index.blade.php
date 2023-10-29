@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary m-2" href="{{route('home')}}">Ga terug</a>
        @guest
        @else
            <a class="btn btn-primary" href="{{route('machines.create')}}">Voeg machine toe</a>
            @error('machines')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        @endguest
        <form id="search" class="form-inline m-2" action="{{route('machines.search')}}" method="GET">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Zoek op machine naam of nummer..." type="search"
                           name="search">
                    <input class="btn btn-primary" type="submit" value="Zoek">
                </div>
            </div>
        </form>
        <div class="m-2 d-flex flex-row flex-wrap gap-2">
            <strong class="m-2">Filter hier op categorie:</strong>
            @foreach($categories as $category)
                <form action="{{route('machines.filter')}}" method="GET">
                    @csrf
                    <input type="hidden" name="filter" value="{{$category->id}}">
                    <input class="btn btn-secondary" type="submit" value="{{$category->name}}">
                </form>
            @endforeach
            <a class="btn btn-primary" href="{{route('machines.index')}}">Toon alles</a>
        </div>
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
                            <a class="btn btn-outline-primary mr-1"
                               href="{{route('machines.show', $machine)}}">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection



