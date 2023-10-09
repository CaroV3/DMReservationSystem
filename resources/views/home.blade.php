@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="m-2">
            <a class="btn btn-primary" href="{{route('machines.index')}}">Overzicht machines</a>
            <a class="btn btn-primary" href="{{route('machines.create')}}">Voeg machine toe</a>
            </div>

        </div>
    </div>
</div>
@endsection
