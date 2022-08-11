@extends( (Auth::user()->hasRole('client')) ? 'layouts.page' : 'layouts.app')
@section('content')
<section class="main-content col-md-12 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">
            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Approvisionnnement des agents en Especes")</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="" class="btn btn-circle btn-info" data-target="#approv-modal" data-toggle="modal">
                            <span>@lang("Approvionner un agent")</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form action="{{ route('update.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row gutters-5">
                                <div class="card col-md-12">
                                    <div class="card-header row gutters-5">
                                        <div class="col text-center text-md-left">
                                            <h5 class="mb-md-0 h6">@lang("Agent deja servi")</h5>
                                        </div>
                                        <div class="float-right d-flex">
                                            <p class="mr-2 align-self-center">@lang("Afficher les statistiques")</p>
                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                <input type="checkbox" name="notificable" @if (Auth::user()->notificable) checked @endif value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>@lang("Nom du servise")</th>
                                                        <th>@lang("Nom de l'agent/Numero")</th>
                                                        <th>@lang("Montant total en USD")</th>
                                                        <th>@lang("Etat d'activite")</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            Guchet 1
                                                        </td>

                                                        <td>Daniel Kikimba <br> <small>genesiskikimba@gmail.com</small></td>
                                                        <td>200000 USD</td>
                                                        <td>Connecte</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <button type="submit" name="button" value="publish" class="btn btn-success action-btn">@lang("Enregistrer")</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card-body px-0 mx-0">
                        <div class="card card-user">
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="mb-0">@lang("Devise les plus utilisees")</h6>
                            </div>
                            <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang("Description devise")</th>
                                                <th>@lang("Stocks USD")</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dollars Americain</td>
                                                <td>20000 usd</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .aiz-main-content -->
</section>
@endsection
