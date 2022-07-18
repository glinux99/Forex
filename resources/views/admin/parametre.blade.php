@extends('layouts.admin')
@section('content')
<section class="main-content">
    <h3>{{__("Parametre")}}
    </h3>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{{__("Editer Profile")}}</h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>{{__("Entreprise (desactiver)")}}</label>
                                            <input type="text" class="form-control" disabled placeholder="{{ config('app.name', 'FOREX') }}" value="{{ config('app.name', 'FOREX') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>{{__("Nom d'utilisateur")}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Nom d\'utilisateur')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__("Adresse E-mail")}}</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__("Noms")}}</label>
                                            <input type="text" class="form-control" placeholder="" value="Daniel">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{__("Mot de passe")}}</label>
                                            <input type="text" class="form-control" placeholder="************">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{__("Adresse")}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Adresse de votre domicile')}}" value="Goma, RDC, avec Keshero">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{__("Ville")}}</label>
                                            <input type="text" class="form-control" placeholder="{{ config('app.city', 'Goma') }}" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{__("Date de naissance")}}</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{__("Type de Compte")}}</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->getRoleNames()->first()}}" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{__("Description")}}</label>
                                            <textarea rows="5" class="form-control" placeholder="Here can be your description">A propos de moi</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">{{__("Mettre a jour")}}</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <a href="#">
                                    <img class="avatar border-gray" src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />

                                    <h4 class="title">{{ Auth::user()->name }}<br />
                                        <small>{{ Auth::user()->name }}</small>
                                    </h4>
                                </a>
                            </div>
                            <p class="description text-center"> A propos de moi
                            </p>
                        </div>
                        <hr>
                        <div class="text-center py-3">
                            {{__("Profile Agent ")}}{{Config("app.name")}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
