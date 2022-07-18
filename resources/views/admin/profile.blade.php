@extends('layouts.admin')
@section('content')
<section class="main-content col-md-9 col-centered">
    <h3>{{__("Profile")}}
    </h3>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="">
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
