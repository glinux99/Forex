@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" data-target="#myModal">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Ajouter un Agent")}}</button>
    <h3>{{__("Comptes Agents")}}
    </h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{__("Liste des Agents")}} |
                    <small>{{ config('app.name', 'FOREX') }}</small>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th class="sort-alpha">Nom</th>
                                <th>{{__("Contact")}}</th>
                                <th class="sort-numeric">{{__("Statistiques")}}</th>
                                <th class="sort-numeric">{{__("Status")}}</th>
                                <th class="d-flex justify-content-center">{{__("Action")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index=>$user)
                            <tr class="gradeX">
                                <td>{{$index+1 }}</td>
                                <td>{{ $user->name}}</td>
                                <td>Win 95+</td>
                                <td><span data-bar-color="danger" class="inlinesparkline">1,4,4,7,5,9,10,15</span></td>
                                <td>{{ "Actif"}}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-primary me-2 btn-xs">
                                        <span class="fa fa-edit fa--xl text-white"></span>
                                    </button>
                                    <button class="btn btn-danger btn-xs">
                                        <span class="fa fa-trash-o text-white fa--xl"></span>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
