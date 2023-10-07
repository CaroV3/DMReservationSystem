@extends('layouts.app')

@section('content')

<ul>
@foreach($machines as $machine)
    <li>{{$machine->name}}</li>
    <li>{{$machine->machine_number}}</li>
@endforeach
</ul>
@endsection
