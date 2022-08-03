@extends( (Auth::user()->hasRole('client')) ? 'layouts.page' : 'layouts.app')
@section('content')
<section class="main-content col-md-12 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Configuration d'une devise")</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="" class="btn btn-circle btn-info" data-target="#devise-modal" data-toggle="modal">
                            <span>@lang("Ajouter une devise")</span>
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
                                            <h5 class="mb-md-0 h6">@lang("Toutes les devises")</h5>
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
                                                        <th>@lang("Description")</th>
                                                        <th>@lang("Stocks")</th>
                                                        <th>@lang("Code")</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            Franc Congolais
                                                        </td>

                                                        <td>200000 cdf</td>
                                                        <td>CDF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            Franc Congolais
                                                        </td>

                                                        <td>200000 cdf</td>
                                                        <td>CDF</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <th></th>
                                                    <th>
                                                        Total
                                                    </th>
                                                </tfoot>
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
                                <h6 class="mb-0">@lang("Notifications en temps reel")</h6>
                            </div>
                            <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                        <div class="media text-inherit">
                                            <div class="media-body">
                                                <p class="mb-1 text-truncate-2">
                                                    Mouvement: 20220420-07072866 a ete paye
                                                </p>
                                                <small class="text-muted">
                                                    22 juillet 2022, 16:15min
                                                </small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                        <div class="media text-inherit">
                                            <div class="media-body">
                                                <p class="mb-1 text-truncate-2">
                                                    Mouvement: 20220420-07072866 a ete paye
                                                </p>
                                                <small class="text-muted">
                                                    22 juillet 2022, 16:15min
                                                </small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .aiz-main-content -->
</section>
@endsection
