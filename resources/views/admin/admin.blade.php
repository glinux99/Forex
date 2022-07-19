@extends('layouts.admin')
@section('content')
<section class="main-content">
    @can('echanger argent')
    <button type="button" class="btn btn-labeled btn-primary pull-right">
        <span class="btn-label"><i class="fa fa-dollar"></i>
        </span>{{__("Echanger une devise")}}</button>
    @endcan
    <h3>{{__("Dashboard")}}
    </h3>
    <div class="row">
        <div class="col-md-9">
            @role('admin|super-admin')
            <!-- Pour l'administrateur principale ou le super admininstrateur -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                        <div class="panel-body bg-primary">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">$759,781,417.92 <em class="fa fa-level-up">
                                        </em>
                                    </p>
                                    <h4 class="m0">{{ __("Balance Totale")}}</h4>
                                    <span class="m-t-10 fs-20"><i class="fa fa-dollar"></i>
                                        {{__("Capital total du marche")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="500" class="panel widget">
                        <div class="panel-body bg-warning">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">$1,947,201.24 <em class="fa fa-level-down"></em></p>
                                    <h4 class="m0">Trade Volume</h4>
                                    <span class="f-left m-t-10 fs-20">
                                        <i class="fa fa-dollar"></i>
                                        {{__("montant d'echange 24h")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1000" class="panel widget">
                        <div class="panel-body bg-danger">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">32.4 Billions <em class="fa fa-refresh"></em></p>
                                    <h4 class="m0">{{__("Caisses")}}</h4>
                                    <span class="m-t-10 fs-20">
                                        <i class="text-c-green f-16 fa fa-refresh"></i>
                                        {{__("Balance aux guchets")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1500" class="panel widget">
                        <div class="panel-body bg-success">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">40 Billions <em class="fa fa-money"></em></p>
                                    <h4 class="m0">{{__("Benefices")}}</h4>
                                    <span class="f-left m-t-10 fs-20">
                                        <i class="fa fa-money"></i>
                                        {{__("Benefices journalieres")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end admin -->
            @else
            <!-- Pour le caissier  -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                        <div class="panel-body bg-primary">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">$759,781,417.92 <em class="fa fa-level-up">
                                        </em>
                                    </p>
                                    <h4 class="m0">{{ __("Balance Totale")}}</h4>
                                    <span class="m-t-10 fs-20"><i class="fa fa-dollar"></i>
                                        {{__("Solde journaliere")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="500" class="panel widget">
                        <div class="panel-body bg-success">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">$1,947,201.24 <em class="fa fa-level-down"></em></p>
                                    <h4 class="m0">{{__("Montant ecroule")}}</h4>
                                    <span class="f-left m-t-10 fs-20">
                                        <i class="fa fa-dollar"></i>
                                        {{__("montant d'echange 24h")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1000" class="panel widget">
                        <div class="panel-body bg-danger">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">32.4 Billions <em class="fa fa-refresh"></em></p>
                                    <h4 class="m0">{{__("Montant Restant")}}</h4>
                                    <span class="m-t-10 fs-20">
                                        <i class="text-c-green f-16 fa fa-refresh"></i>
                                        {{__("Balance personnelle")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1500" class="panel widget">
                        <div class="panel-body bg-warning">
                            <div class="row row-table row-flush">
                                <div class="col-xs-12">
                                    <p class="mb0">1usd -> 2000 cdf <em class="fa fa-money"></em></p>
                                    <h4 class="m0">{{__("Taux d'echange")}}</h4>
                                    <span class="f-left m-t-10 fs-20">
                                        <i class="fa fa-money"></i>
                                        {{__("devise courant...")}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End pour le caissier  -->
            @endrole
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{__("Devises disponibles")}}
                            <a href="javascript:void(0);" data-perform="panel-dismiss" data-toggle="tooltip" title="" class="pull-right" data-original-title="Close Panel">
                                <em class="fa fa-times"></em>
                            </a>
                            <a href="javascript:void(0);" data-perform="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Panel">
                                <em class="fa fa-plus"></em>
                            </a>
                        </div>
                        <div class="panel-wrapper collapse">
                            <div class="panel panel-default">
                                <div class="panel-heading">{{__("Devises disponibles")}}|
                                    <small>{{__("Devises disponibles pour effectuer les echanges")}}</small>
                                </div>
                                <div class="panel-body">
                                    <table id="datatable1" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="tableSmallPad">{{__("Code")}}</th>
                                                <th class="tableSmallPad">{{__("Prix")}}</th>
                                                <th class="tableSmallPad">{{__("Volume")}}</th>
                                                <th class="tableSmallPad">{{__("Changement")}}</th>
                                                <th class="tableSmallPad">{{__("Nom")}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- BCH Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad">
                                                    <!--RADIO 1-->
                                                    <input type="radio" class="radio_item" value="" name="BCH" id="radio1">
                                                    <label class="label_item" for="radio1"> <i class="fa fa-star text-c-blue"></i> </label> BCH
                                                </td>
                                                <td class="tableSmallPad">0.16000009</td>
                                                <td class="tableSmallPad">2967.720</td>
                                                <td class="text-c-blue tableSmallPad">+17.84</td>
                                                <td class="tableSmallPad">Bitcoin Cash</td>
                                            </tr>
                                            <!-- BCH Ends Here -->
                                            <!-- ETH Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio10">
                                                    <label class="label_item" for="radio10"> <i class="fa fa-star text-c-blue"></i> </label> ETH
                                                </td>
                                                <td class="tableSmallPad">0.10039995</td>
                                                <td class="tableSmallPad">2887.720</td>
                                                <td class="text-c-blue tableSmallPad">+1.35</td>
                                                <td class="tableSmallPad">Ethereum</td>
                                            </tr>
                                            <!-- ETH Ends Here -->
                                            <!-- XRP Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio3">
                                                    <label class="label_item" for="radio3"> <i class="fa fa-star text-c-blue"></i> </label> XRP
                                                </td>
                                                <td class="tableSmallPad">0.00009485</td>
                                                <td class="tableSmallPad">1633.576</td>
                                                <td class="text-c-blue tableSmallPad">+5.10</td>
                                                <td class="tableSmallPad">Ripple</td>
                                            </tr>
                                            <!-- XRP Ends Here -->
                                            <!-- STR Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio4">
                                                    <label class="label_item" for="radio4"> <i class="fa fa-star text-c-blue"></i> </label> STR
                                                </td>
                                                <td class="tableSmallPad">0.00004322</td>
                                                <td class="tableSmallPad">1196.608</td>
                                                <td class="text-c-red tableSmallPad">-0.05</td>
                                                <td class="tableSmallPad">Stellar</td>
                                            </tr>
                                            <!-- STR Ends Here -->
                                            <!-- LTC Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio5">
                                                    <label class="label_item" for="radio5"> <i class="fa fa-star text-c-blue"></i> </label> LTC
                                                </td>
                                                <td class="tableSmallPad">0.01790003</td>
                                                <td class="tableSmallPad">1115.235</td>
                                                <td class="text-c-blue tableSmallPad">+1.58</td>
                                                <td class="tableSmallPad">Litecoin</td>
                                            </tr>
                                            <!-- LTC Ends Here -->
                                            <!-- SC Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio6">
                                                    <label class="label_item" for="radio6"> <i class="fa fa-star text-c-blue"></i> </label> SC
                                                </td>
                                                <td class="tableSmallPad">0.00000272</td>
                                                <td class="tableSmallPad">131.014</td>
                                                <td class="text-c-blue tableSmallPad">+1.87</td>
                                                <td class="tableSmallPad">Siacoin</td>
                                            </tr>
                                            <!-- SC Ends Here -->
                                            <!-- Doge Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio7">
                                                    <label class="label_item" for="radio7"> <i class="fa fa-star text-c-blue"></i> </label> DOGE
                                                </td>
                                                <td class="tableSmallPad">0.00000055</td>
                                                <td class="tableSmallPad">169.631</td>
                                                <td class="text-c-red tableSmallPad">-1.79</td>
                                                <td class="tableSmallPad">Dogecoin</td>
                                            </tr>
                                            <!-- Doge Ends Here -->
                                            <!-- DBG Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio8">
                                                    <label class="label_item" for="radio8"> <i class="fa fa-star text-c-blue"></i> </label> DGB
                                                </td>
                                                <td class="tableSmallPad">0.00000402</td>
                                                <td class="tableSmallPad">90.224</td>
                                                <td class="text-c-blue tableSmallPad">+0.00</td>
                                                <td class="tableSmallPad">DigiByte</td>
                                            </tr>
                                            <!-- DGB Ends Here -->
                                            <!-- NXT Starts Here -->
                                            <tr class="clickable-row" data-href="index.html">
                                                <td class="tableSmallPad"><input type="radio" class="radio_item" value="" name="ETH" id="radio9">
                                                    <label class="label_item" for="radio9"> <i class="fa fa-star text-c-blue"></i> </label> NXT
                                                </td>
                                                <td class="tableSmallPad">0.00002241</td>
                                                <td class="tableSmallPad">100.305</td>
                                                <td class="text-c-blue tableSmallPad">+2.56</td>
                                                <td class="tableSmallPad">NXT</td>
                                            </tr>
                                            <!-- NXT Ends Here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">{{__("Toutes les devises disponibles")}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart Starts Here -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-collapse">
                            <div class="panel-body">
                                <h4>{{__("Statistiques")}}</h4>
                                <div id="candlestickChart" class="h-500">
                                    <span data-bar-color="danger" class="inlinesparkline">1,4,4,7,5,9,10,15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart Ends Here -->
            <div class="row">
                <div class="col-md-6">
                    <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="1400" class="panel widget">
                        <div class="panel-body">
                            <div class="text-right text-muted">
                                <em class="fa fa-gavel fa-2x text-danger"></em>
                            </div>
                            <h3 class="mt0">Bid Price</h3>
                            <p class="text-danger"><i class="fa fa-money"></i> $0.02</p>
                            <p><i class="fa fa-btc"></i> 0.00000284</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="1400" class="panel widget">
                        <div class="panel-body">
                            <div class="text-right text-muted">
                                <em class="fa fa-bullhorn fa-2x text-green"></em>
                            </div>
                            <h3 class="mt0">Ask Price</h3>
                            <p class="text-green"><i class="fa fa-money"></i> $0.02</p>
                            <p><i class="fa fa-btc"></i> 0.00000285</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">{{__("Evolution de devises")}}</div>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                    <em class="fa fa-circle fa-stack-2x text-green"></em>
                                    <em class="fa fa-level-up fa-stack-1x fa-inverse text-white"></em>
                                </span>
                            </div>
                            <div class="media-body clearfix">
                                <strong>{{__("Derniere prix")}}</strong>
                                <p class="m0">
                                    <small class="text-green">$0.02 <i class="fa fa-money"></i></small>
                                </p>
                                <p><i class="fa fa-btc"></i> 0.00000286</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                    <em class="fa fa-circle fa-stack-2x text-green"></em>
                                    <em class="fa fa-level-up fa-stack-1x fa-inverse text-white"></em>
                                </span>
                            </div>
                            <div class="media-body clearfix">
                                <strong>{{__("Changement dans 24h")}}</strong>
                                <p class="m0">
                                    <small class="text-green">+1.35%</small>
                                </p>
                                <p><i class="fa fa-plus"></i> {{__("Gagnant")}} <i class="fa fa-level-up text-green"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div>{{__("Statistiques Hebdomadaire")}}</div>
                        <div class="mt-4 ms-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                        <em class="fa fa-level-down fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <strong>{{__("Faible")}}</strong>
                                    <p class="m0">
                                        <small class="text-danger">$0.02</small>
                                    </p>
                                    <p><i class="fa fa-btc"></i> 0.00000261 <i class="fa fa-level-down text-danger"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item ">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                        <em class="fa fa-circle fa-stack-2x text-green"></em>
                                        <em class="fa fa-level-up fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                </div>
                                <div class="media-body clearfix">
                                    <strong>{{__("Hausse")}}</strong>
                                    <p class="m0">
                                        <small class="text-green">$0.02</small>
                                    </p>
                                    <p><i class="fa fa-btc"></i> 0.00000261 <i class="fa fa-level-up text-green"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Coin Status Ends Here -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-right"><i class="fa fa-bullhorn"></i></div>
                    <div class="panel-title">Upcoming News</div>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <small class="pull-right">2h</small>
                                <strong class="media-heading text-primary">James</strong>
                                <p><small>Posted by <span class="__cf_email__" data-cfemail="b9f3d8d4dccaf9dcc1d8d4c9d5dc">[email&#160;protected]</span></small></p>
                                <p class="mb-sm">
                                    <small>We are adding iota coins read full notice example.com/adding-iota</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <small class="pull-right">2h</small>
                                <strong class="media-heading text-primary">Jimmy</strong>
                                <p><small>Posted by <span class="__cf_email__" data-cfemail="e0aa898d8d99a08598818d908c85">[email&#160;protected]</span></small></p>
                                <p class="mb-sm">
                                    <small>We have scheduled update for BTC on 03/04/2018 example.com/btc-update</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="media">
                            <div class="media-body">
                                <small class="pull-right">2h</small>
                                <strong class="media-heading text-primary">Franky</strong>
                                <p><small>Posted by <span class="__cf_email__" data-cfemail="2d6b5f4c4346546d48554c405d4148">[email&#160;protected]</span></small></p>
                                <p class="mb-sm">
                                    <small>Vote for your favorite coin to be added example.com/vote-coin</small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="panel-footer clearfix">
                    <a href="#" class="pull-left">
                        <small>Read All</small>
                    </a>
                    <a href="#" class="pull-right">
                        <small>Dismiss All</small>
                    </a>
                </div>
                <div class="panel-footer clearfix">
                    <p>Upcoming News</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Bid Price
                    <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="pannel panel-body">
                    <label class="col-sm-2 control-label m-t-9">Units</label>
                    <div class="input-group col-sm-10 m-b">
                        <span class="input-group-addon btn-primary group-btn-hover"><i class="fa fa-angle-double-up"></i> Max</span>
                        <input type="text" placeholder="0.00000000" class="form-control text-right">
                    </div>
                    <div class="m-t-9">
                        <label class="col-sm-2 control-label m-t-9">Bid</label>
                        <div class="input-group m-b">
                            <div class="input-group-btn">
                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Price
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Bid</a>
                                    </li>
                                    <li><a href="javascript:void(0);">Ask</a>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" class="form-control text-right" placeholder="0.00000000">
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group m-t-9 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-block">Limit
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="javascript:void(0);">Limit</a>
                                </li>
                                <li><a href="javascript:void(0);">Conditional</a>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group m-t-9 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle btn-block">Good 'Till Cancelled
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="javascript:void(0);">Good 'Till Cancelled</a>
                                </li>
                                <li><a href="javascript:void(0);">Immediate or Cancel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-t-9">
                        <label class="col-sm-2 control-label m-t-9">Total</label>
                        <div class="input-group col-sm-10 m-b">
                            <span class="input-group-addon"><i class="fa fa-btc"></i></span>
                            <input type="text" placeholder="0.00000000" class="form-control text-right">
                        </div>
                    </div>
                    <div class="m-t-9">
                        <button type="button" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Buy Siacoin</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Ask Price
                    <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="pannel panel-body">
                    <label class="col-sm-2 control-label m-t-9">Units</label>
                    <div class="input-group col-sm-10 m-b">
                        <span class="input-group-addon btn-primary group-btn-hover"><i class="fa fa-angle-double-up"></i> Max</span>
                        <input type="text" placeholder="0.00000000" class="form-control text-right">
                    </div>
                    <div class="m-t-9">
                        <label class="col-sm-2 control-label m-t-9">Ask</label>
                        <div class="input-group m-b">
                            <div class="input-group-btn">
                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Price
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Ask</a>
                                    </li>
                                    <li><a href="javascript:void(0);">Bid</a>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" class="form-control text-right" placeholder="0.00000000">
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group m-t-9 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-block">Limit
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="javascript:void(0);">Limit</a>
                                </li>
                                <li><a href="javascript:void(0);">Conditional</a>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group m-t-9 col-md-6 col-sm-12 col-xs-12">
                            <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle btn-block">Good 'Till Cancelled
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="javascript:void(0);">Good 'Till Cancelled</a>
                                </li>
                                <li><a href="javascript:void(0);">Immediate or Cancel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-t-9">
                        <label class="col-sm-2 control-label m-t-9">Total</label>
                        <div class="input-group col-sm-10 m-b">
                            <span class="input-group-addon"><i class="fa fa-btc"></i></span>
                            <input type="text" placeholder="0.00000000" class="form-control text-right">
                        </div>
                    </div>
                    <div class="m-t-9">
                        <button type="button" class="btn btn-primary btn-block"><i class="fa fa-minus"></i> Sell Siacoin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
