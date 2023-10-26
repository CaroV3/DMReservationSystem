@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Beheer medewerkers') }}</div>

                    <div class="card-body">
                        <table style="width:100%">
                            <tr>
                                <th>Medewerker</th>
                                <th>Status</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td><button class="btn btn-primary">Actief</button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="m-2">
                </div>

            </div>
        </div>
    </div>
@endsection
