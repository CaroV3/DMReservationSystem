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
                                    <td>
                                        <form action="{{route('admin.toggle', $user)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            @if($user->status===1)
                                                <input type="hidden" id="status" name="status" value="2">
                                                <input class="btn btn-primary mt-2" type="submit" value="Actief">
                                            @else
                                                <input type="hidden" id="status" name="status" value="1">
                                                <input class="btn btn-outline-primary mt-2" type="submit" value="Niet actief">
                                            @endif
                                        </form>
                                    </td>
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
