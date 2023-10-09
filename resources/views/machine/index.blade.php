@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul>
                    @foreach($machines as $machine)
                        <li><a href="{{route('machines.show', $machine)}}">{{$machine->name}}</a></li>
                    @endforeach
                </ul>
                <a class="btn btn-primary" href="{{route('home')}}">Terug naar home</a>
            </div>
        </div>
    </div>


@endsection
