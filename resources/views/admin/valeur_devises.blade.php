@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right btn-lg" data-toggle="modal" data-target="#devise">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Nouvelle devise")}}</button>
    <h3>{{__("VALEUR DE DEVISES")}}
    </h3>
</section>
@endsection
