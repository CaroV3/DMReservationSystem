@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$machine->name}}</h1>
                <p>Machinenummer: {{$machine->machine_number}}</p>
                <p>Categorie: {{$machine->category->name}}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet distinctio dolor et eum exercitationem
                    inventore iste laboriosam molestias nemo nesciunt non possimus quibusdam, reprehenderit tempora
                    unde, ut voluptates voluptatum! Ipsam?
                </p>
                <p>Geinteresserd in deze machine? Maak hieronder een afspraak om de machine te bezichtigen!</p>
                @guest
                    <a class="btn btn-primary mr-1" href="{{route('machines.index')}}">Ga terug</a>
                    <a class="btn btn-primary mr-1" href="{{route('appointments.create')}}">Maak afspraak</a>

                @else
                    <a class="btn btn-primary mr-1" href="{{route('machines.index')}}">Ga terug</a>
                    <a class="btn btn-primary" href="{{route('machines.edit', $machine)}}">Bewerk</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Verwijder
                    </button>
                @endguest

            </div>
        </div>
    </div>

    <!--modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bevestig uw keuze</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Weet u zeker dat u '{{$machine->name}}' met machinenummer {{$machine->machine_number}} wilt
                        verwijderen?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleer</button>
                    <form method="post" action="{{route('machines.destroy', $machine)}}">
                        <!-- here the '1' is the id of the post which you want to delete -->
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-primary" type="submit">Ja, verwijder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


