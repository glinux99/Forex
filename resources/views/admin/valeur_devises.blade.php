@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" data-target="#devise">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Nouvelle devise")}}</button>
    <h3>{{__("VALEUR DE DEVISES")}}
    </h3>
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{__("Devise")}}
                    <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="panel-body">
                    <p>
                    <div class="row col-centered col-md-8">
                        <div class="col-md-4">
                            {{__("Monaie courrante")}}
                        </div>
                        <div class="col-md-6">
                            <div class="col-sm-2">
                                <select name="DeviseCourant" id="inputDeviseCourant" class="form-control" required="required">
                                    <option value="">USD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </p>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__("Description")}}</th>
                                            <th>{{__("Code Pays")}}</th>
                                            <th>{{__("valeur reel")}}</th>
                                            <th>{{__("valeur d'echange")}}</th>
                                            <th>{{__("Quantite en Stock")}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">Panel Footer</div>
            </div>
        </div>
    </div>
</section>
@endsection
