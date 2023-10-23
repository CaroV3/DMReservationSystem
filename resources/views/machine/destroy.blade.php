@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>Weet u zeker dat u {{$machine->name}} met machinenummer {{$machine->machine_number}} wilt verwijderen?</p>
            <a class="btn btn-primary" href="{{route('home')}}">Terug naar home</a>
            <form method="post" action="{{route('machines.destroy', $machine)}}">
                <!-- here the '1' is the id of the post which you want to delete -->
                @method('DELETE')
                @csrf

                <button class="btn btn-primary mt-1" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
