@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif

        {{--<forms action="" class="form" id="form-addition">--}}
            {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Nombre 1</label>--}}
                        {{--<input type="text" required id="int_1" name="int_1" class="form-control"/>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label>Nombre 2</label>--}}
                        {{--<input type="text" required id="int_2" name="int_2" class="form-control"/>--}}
                    {{--</div>--}}

                    {{--<hr/>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Somme</label>--}}
                        {{--<span id="resulat"></span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</forms>--}}

        {{--<button id="btnSomme" class="btn btn-default">Enregistrer</button>--}}

        <hr/>
        <form action="{{route('eleve.store')}}" id="form-add-eleve" method="post" class="form">
            {{csrf_field()}}

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" required id="nom" name="nom" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" required id="prenom" name="prenom" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Date de naissance</label>
                        <input type="text" required id="birth_date" name="birth_date" class="form-control"/>
                    </div>

                    <button class="btn btn-default">Enregistrer</button>
                </div>
            </div>
        </form>

        <hr/>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>date de naissance</th>
                <th>
                    <input type="checkbox" id="checkAll">
                    Check all
                </th>
            </tr>
            </thead>
            <tbody id="list_eleve">
            @foreach($eleves as $eleve)
                <tr>
                    <td>{{$eleve->id}}</td>
                    <td>{{$eleve->nom}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td>{{$eleve->birth_date->format('d/m/Y')}}</td>
                    <td><input type="checkbox" class="check-eleve"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection