@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right btn-lg" data-toggle="modal" data-target="#myModal">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Ajouter un Agent")}}</button>
    <h3>{{__("Comptes Agents")}}
    </h3>
</section>
@endsection
