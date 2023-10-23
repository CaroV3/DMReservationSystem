@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mijn afspraken') }}</div>

                    <div class="card-body">
                        <table style="width:100%">
                            <tr>
                                <th>Naam</th>
                                <th>Datum</th>
                                <th>Tijd</th>
                            </tr>
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td><a href="">{{$appointment->name}}</a></td>
                                    <td>{{$appointment->date}}</td>
                                    <td>{{$appointment->time}}</td>
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
