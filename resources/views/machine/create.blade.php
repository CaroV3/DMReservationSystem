@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('machines.store')}}" method="POST">

                    @csrf

                    <label for="name">Naam</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name"
                           value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label for="machine-number">Machine nummer</label>
                    <input class="form-control @error('machine_number') is-invalid @enderror" type="text"
                           id="machine-number" name="machine_number" value="{{ old('machine_number') }}">
                    @error('machine_number')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <p class="mt-3">Kies een categorie</p>
                    @foreach($categories as $category)
                        @if(old('category_id') == $category->id)
                            <input checked type="radio" id="{{$category->name}}" name="category_id"
                                   value="{{$category->id}}">
                            <label for="{{$category->name}}">{{$category->name}}</label><br>
                        @else
                            <input type="radio" id="{{$category->name}}" name="category_id"
                                   value="{{$category->id}}">
                            <label for="{{$category->name}}">{{$category->name}}</label><br>
                        @endif
                    @endforeach
                    @error('category_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <input class="btn btn-primary mt-2" type="submit" value="Voeg toe">
                </form>
                <a class="btn btn-primary mt-2" href="{{route('machines.index')}}">Ga terug</a>
            </div>
        </div>
    </div>
@endsection
