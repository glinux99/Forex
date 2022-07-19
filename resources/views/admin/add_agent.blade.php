@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right btn-lg" data-toggle="modal" data-target="#myModal">
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
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th class="sort-alpha">Nom</th>
                                <th>{{__("Contact")}}</th>
                                <th class="sort-numeric">{{__("Statistiques")}}</th>
                                <th>{{__("Action")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td><span data-bar-color="danger" class="inlinesparkline">1,4,4,7,5,9,10,15</span></td>
                                <td>X</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button type="button" data-toggle="notify" data-message="Message with status.." data-options="{&quot;status&quot;:&quot;success&quot;}" class="btn btn-success top-0">Success</button>
            </div>
        </div>
    </div>
</section>
@endsection
