<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dotjs.net/demo/crypto/cryptoapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2022 08:30:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta content="Responsive Bootstrap Multi-Purpose Crypto Trading User Interface" name="description" />
    <meta name="keywords" content="crypto, Bootstrap, bitcoins, ethereum, dogecoin, iota, ripple, siacoin, exchange, trading platform, crypto trading">
    <meta name="author" content="">
    <title>Tradify - Responsive Crypto/Stock Trading User Interface</title>
    <link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.css')}}">
    <link href="{{ asset('css/lg.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/animo/animate%2banimo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/csspinner/csspinner.min.css')}}">
    <link href="{{ asset('css/forex.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/app/css/app.css')}}">

</head>

<body>


    <div id="overlayLoader">
        <div id="preloader">
            <span></span>
            <span></span>
        </div>
    </div>


    <section class="wrapper">
        @include('layouts.modals')
        <nav class="navbar navbar-default navbar-top navbar-fixed-top">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <div class="brand-logo"><i class="fa fa-bitcoin"></i> {{ config('app.name', 'FOREX') }}</div>
                    <div class="brand-logo-collapsed"><i class="fa fa-bitcoin"></i></div>
                </a>
            </div>
            <div class="nav-wrapper">
                <ul class="nav navbar-nav mt0">
                    <li>
                        <a href="#" data-toggle="aside">
                            <em class="fa fa-align-left"></em>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right mt0">
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                            <strong><i class="fa fa-btc"></i> Wallet</strong>
                        </a>
                    </li>
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                            <em class="fa fa-bell"></em>
                            <div class="label label-danger">3</div>
                        </a>
                        <ul class="dropdown-menu col-md-4 col-sm-6 col-xs-12">
                            <li>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Buy/Sell</th>
                                                <th>Progress</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Buy order SC</td>
                                                <td>
                                                    <div class="progress progress-striped progress-xs">
                                                        <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success w-100-p">
                                                            <span class="sr-only">100% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <em class="fa fa-calendar fa-fw text-muted"></em>02/19/2018
                                                </td>
                                                <td class="text-center">
                                                    Complete
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sell order SC</td>
                                                <td>
                                                    <div class="progress progress-striped progress-xs">
                                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-danger w-50-p">
                                                            <span class="sr-only">50% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <em class="fa fa-calendar fa-fw text-muted"></em>02/18/2018
                                                </td>
                                                <td class="text-center">
                                                    50% Filled
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Buy order IOTA</td>
                                                <td>
                                                    <div class="progress progress-striped progress-xs">
                                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success w-50-p">
                                                            <span class="sr-only">50% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <em class="fa fa-calendar fa-fw text-muted"></em>02/17/2018
                                                </td>
                                                <td class="text-center">
                                                    50% Filled
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                            <em class="fa fa-user"></em>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile.me')}}">{{__("Profile")}}</a>
                            </li>
                            <li><a href="{{route('parametre')}}">{{__("Parametre")}}</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="aside">
            <nav class="sidebar">
                <ul class="nav">
                    <li>
                        <div data-toggle="collapse-next" class="item user-block has-submenu">
                            <div class="user-block-picture">
                                <img src="app/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle account-img-mb">
                            </div>
                            <div class="user-block-info">
                                <span class="user-block-name item-text">{{ Auth::user()->name }}</span>
                                <span class="user-block-role"> <i class="fa fa-check text-green"></i> Verified</span>
                                <div class="label label-primary"><i class="fa fa-chevron-down"></i> Account Info</div>
                            </div>
                        </div>
                        <ul class="nav collapse">
                            <li><a href="javascript:void(0);">
                                    {{__("Open Orders")}}
                                </a>
                            </li>
                            @can('logs')
                            <li><a href="{{ route('historiques.activite')}}">{{__("Activites Agent")}}</a>
                                @endcan
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    {{__("Securité")}}
                                    <div class="label label-success pull-right"><i class="fa fa-check"></i> {{__("Verifiée")}}</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    2FA
                                    <div class="pull-right label label-danger"><i class="fa fa-unlock"></i> Not Enabled</div>
                                </a>
                            </li>
                            <li><a href="{{ route('historique.connection')}}">
                                    {{__("Activité de Connection")}}
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">API</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="/admin" title="Markets" data-toggle="" class="has-submenu">
                            <em class="fa fa-home"></em>
                            <div class="label pull-right"><i class="fa fa-line-chart"></i></div>
                            <span class="item-text">{{__("Acceuil")}}</span>
                        </a>
                        <ul class="nav collapse in">
                            <li class="active">
                                <a href="index.html" title="Default" data-toggle="" class="no-submenu">
                                    <span class="item-text">{{__("Service disponible")}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-2.html" title="Layout 2" data-toggle="" class="no-submenu">
                                    <span class="item-text">{{__("Statistiques")}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @role('caissier')
                    @can('echanger argent')
                    <li>
                        <a href="prices.html" title="Dashboard" class="">
                            <em class="fa fa-btc"></em>
                            <span class="item-text">{{__("Echanger une devise")}}</span>
                        </a>
                    </li>
                    @endcan
                    @elserole('admin|super-admin')
                    @can('devises crud')
                    <li>
                        <a href="{{ route('admin.devise.caisse')}}" title="Dashboard" class="">
                            <em class="fa fa-btc"></em>
                            <span class="item-text">{{__("Devise par caisse /24h")}}</span>
                        </a>
                    </li>
                    @endcan
                    @endrole
                    <li>
                        <a href="{{ route('admin.nouvelle.devise')}}" title="Dashboard" class="">
                            <em class="fa fa-btc"></em>
                            <span class="item-text">{{__("Valeur de devises")}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('historiques.transactions')}}" title="Dashboard" class="">
                            <em class="fa fa-btc"></em>
                            <span class="item-text">{{__("Transactions")}}</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('parametre')}}" title="Dashboard" class="">
                            <em class="fa fa-gear"></em>
                            <span class="item-text">{{__("Parametre")}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Pages" data-toggle="collapse-next" class="has-submenu">
                            <em class="fa fa-file-text"></em>
                            <span class="item-text">{{__("Autres")}}</span>
                        </a>
                        <ul class="nav collapse ">
                            @role('admin|super-admin')
                            <li>
                                <a href="{{ route('admin.agent.view')}}" title="Login" data-toggle="" class="no-submenu">
                                    <span class="item-text">{{__("Comptes Agents")}}</span>
                                </a>
                            </li>
                            @endrole
                            <li>
                                <a href="lock.html" title="Lock" data-toggle="" class="no-submenu">
                                    <span class="item-text">{{__("Verouiller mon compte")}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        <section>
            @yield('content')
        </section>
    </section>
    <script data-cfasync="false" src="https://dotjs.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/plugins/velocity/velocity.js')}}"></script>
    <script src="{{ asset('assets/plugins/velocity/velocity.ui.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/plugins/chosen/chosen.jquery.js')}}"></script>
    <script src="{{ asset('assets/plugins/slider/js/bootstrap-slider.js')}}"></script>
    <script src="{{ asset('assets/plugins/filestyle/bootstrap-filestyle.js')}}"></script>
    <script src="{{ asset('assets/plugins/animo/animo.js')}}"></script>
    <script src="{{ asset('assets/plugins/sparklines/jquery.sparkline.js')}}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js')}}"></script>
    <script src="{{ asset('assets/tradify/highcharts.js')}}"></script>
    <script src="{{ asset('assets/tradify/exporting.js')}}"></script>
    <script src="{{ asset('assets/plugins/modernizr/modernizr.js')}}">
    </script>
    <script src="{{ asset('assets/plugins/fastclick/fastclick.js')}}">
    </script>
    <script src="{{ asset('assets/plugins/datatable/extensions/ColVis/js/dataTables.colVis.js')}}"></script>
    <!--[if lt IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('assets/app/js/tradify.js')}}"></script>
    <script>
        $('#codeDevide, #codeQte').bind("focus blur change keyup", function() {
            $('#codeQte').val($('#codeDevide').val());
            $('.currentDevise').text($('#ccurrentDevise').val());
        });
        $('#currentDevise, #currentDevise2').bind("focus blur change keyup", function() {
            $('#currentDevise2').text($('#currentDevise').val());
        });
    </script>
    <script>
        function deleteNewDevise(el) {
            $(el).parents(".newDevise").remove();
        }
        $('#addElement').click(function() {
            $('#addDevise').append(`<div class="newDevise">
                                                                        <label for="" class="form-label">{{__("Montant")}} # <span>1</span></label>
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <div class="input-group mb-2">
                                                                                    <input type="text" class="form-control">
                                                                                    <div class="input-group-btn">
                                                                                        <select name="code" id="inputcode" class="form-control" required="required">
                                                                                            <option value="">USD</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                           <button type="button" class="ms-2 col-md-2 btn btn-danger" onclick="deleteNewDevise(this)"><span class="fa fa-trash-o me-1 fs-2"></span></button>
                                                                        </div>
                                                                    </div>`);
        });
    </script>
</body>

<!-- Mirrored from dotjs.net/demo/crypto/cryptoapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2022 08:30:20 GMT -->

</html>
