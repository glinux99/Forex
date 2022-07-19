@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" data-target="#myModal">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Ajouter un Agent")}}</button>
    <h3>{{__("GUICHETS")}}
    </h3>
    <div class="row">
        <div class="col-md-9">

            <!-- Chart Starts Here -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Solde aux Guchets</h4>
                        </div>
                        <div class="panel-collapse">
                            <div class="panel-body">
                                <form action="" method="post">
                                    <div class="col-centered col-md-9">
                                        <div class="row">
                                            <div id="faq" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="questionOne">
                                                        <h5 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="true" aria-controls="answerOne">
                                                                {{__("Guchet")}} #<span>1</span>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="answerOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionOne">
                                                        <div class="panel-body">
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">{{__("Nom de l'agent")}}</label>
                                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                </div>
                                                                <div>
                                                                    <label for="" class="form-label">{{__("Montant")}} # <span>1</span></label>
                                                                    <div class="row">
                                                                        <div class="col-md-9 col-sm-9 col-lg-9 col-xs-9">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" class="form-control">
                                                                                <div class="input-group-btn">
                                                                                    <select name="code" id="inputcode" class="form-control" required="required">
                                                                                        <option value="">USD</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-2 col-md-2 col-sm-2 col-lg-2 col-xs-2">
                                                                            <button type="button" class="btn btn-primary pull-left" id="addElement"><span class="fa fa-plus me-1"></span>{{__(" Devises")}}</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="addDevise">

                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 col-centered">
                                                                    <button type="button" class="btn btn-labeled btn-inverse m-t-9 me-2">
                                                                        <span class="btn-label"><i class="fa fa-check"></i>
                                                                        </span>{{__("Valider")}}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="questionThree3">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree3" aria-expanded="true" aria-controls="answerThree3">
                                                                {{__("Guchet")}} #<span>2</span>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="answerThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionThree3">
                                                        <div class="panel-body">
                                                            ok
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">{{__("Status de Guchets")}}</div>
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
                                <strong>{{__("Guchet 1")}}</strong>
                                <p class="m0">
                                    <small class="text-green">$0.02 <i class="fa fa-money"></i></small>
                                </p>
                                <p><i class="fa fa-btc"></i> 0.00000286</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Orders Book -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Orders Book
                    <a href="javascript:void(0);" data-perform="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Panel">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="panel-heading border-none">
                    <div class="pull-right">
                        <label>
                            <select class="form-control input-sm">
                                <option value="">Display Row...</option>
                                <option value="">10</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">100</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="table-responsive m-t-10">
                                <table class="table table-striped table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                                <i class="fa fa-caret-down"></i>
                                            </th>
                                            <th>
                                                Sum
                                            </th>
                                            <th>
                                                Total
                                            </th>
                                            <th>
                                                Size (SC)
                                            </th>
                                            <th>
                                                Bid (BTC)
                                            </th>
                                            <th>
                                                <i class="fa fa-star"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">0.0159</td>
                                            <td class="number">0.0159</td>
                                            <td class="number cursor-pointer">5680.47083071</td>
                                            <td class="number cursor-pointer">0.00000280</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">0.0685</td>
                                            <td class="number">0.0526</td>
                                            <td class="number cursor-pointer">18851.91700000</td>
                                            <td class="number cursor-pointer">0.00000279</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">0.7073</td>
                                            <td class="number">0.6388</td>
                                            <td class="number cursor-pointer">229789.14814763</td>
                                            <td class="number cursor-pointer">0.00000278</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">2.1508</td>
                                            <td class="number">1.4435</td>
                                            <td class="number cursor-pointer">521105.97581155</td>
                                            <td class="number cursor-pointer">0.00000277</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">5.7000</td>
                                            <td class="number">3.5492</td>
                                            <td class="number cursor-pointer">1285951.32360851</td>
                                            <td class="number cursor-pointer">0.00000276</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">8.6771</td>
                                            <td class="number">2.9771</td>
                                            <td class="number cursor-pointer">1082582.56091735</td>
                                            <td class="number cursor-pointer">0.00000275</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">11.6762</td>
                                            <td class="number">2.9991</td>
                                            <td class="number cursor-pointer">1094562.64213653</td>
                                            <td class="number cursor-pointer">0.00000274</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">20.2601</td>
                                            <td class="number">8.5839</td>
                                            <td class="number cursor-pointer">3144290.86429987</td>
                                            <td class="number cursor-pointer">0.00000273</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">21.2152</td>
                                            <td class="number">0.9551</td>
                                            <td class="number cursor-pointer">351142.02305649</td>
                                            <td class="number cursor-pointer">0.00000272</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                            <td class="number">23.1955</td>
                                            <td class="number">1.9803</td>
                                            <td class="number cursor-pointer">730741.05599659</td>
                                            <td class="number cursor-pointer">0.00000271</td>
                                            <td class="symbol">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="w-100-p">
                                <tbody>
                                    <tr>
                                        <td class="w-50-p">
                                            217.564 BTC
                                        </td>
                                        <td class="w-50-p text-right">
                                            169728986.764 SC
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="float-right">
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="#">First</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="#">Prev</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="#">Next</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="#">Last</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                                <i class="fa fa-star"></i>
                                            </th>
                                            <th>
                                                Ask (BTC)
                                            </th>
                                            <th>
                                                Size (SC)
                                            </th>
                                            <th>
                                                Total
                                            </th>
                                            <th>
                                                Sum
                                            </th>
                                            <th>
                                                <i class="fa fa-caret-down"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000281</td>
                                            <td class="number cursor-pointer">360358.10101320</td>
                                            <td class="number">1.0126</td>
                                            <td class="number">1.0126</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000282</td>
                                            <td class="number cursor-pointer">133643.37381191</td>
                                            <td class="number">0.3769</td>
                                            <td class="number">1.3895</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000283</td>
                                            <td class="number cursor-pointer">623151.30997127</td>
                                            <td class="number">1.7635</td>
                                            <td class="number">3.1530</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000284</td>
                                            <td class="number cursor-pointer">464417.50666583</td>
                                            <td class="number">1.3189</td>
                                            <td class="number">4.4719</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000285</td>
                                            <td class="number cursor-pointer">1530110.21227631</td>
                                            <td class="number">4.3608</td>
                                            <td class="number">8.8328</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000286</td>
                                            <td class="number cursor-pointer">646492.28404140</td>
                                            <td class="number">1.8490</td>
                                            <td class="number">10.6817</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000287</td>
                                            <td class="number cursor-pointer">1295584.02927247</td>
                                            <td class="number">3.7183</td>
                                            <td class="number">14.4001</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000288</td>
                                            <td class="number cursor-pointer">461747.75984107</td>
                                            <td class="number">1.3298</td>
                                            <td class="number">15.7299</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000289</td>
                                            <td class="number cursor-pointer">801337.21839318</td>
                                            <td class="number">2.3159</td>
                                            <td class="number">18.0458</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="symbol">
                                            </td>
                                            <td class="number cursor-pointer">0.00000290</td>
                                            <td class="number cursor-pointer">2518143.00186107</td>
                                            <td class="number">7.3026</td>
                                            <td class="number">25.3484</td>
                                            <td class="p0">
                                                <button type="button" class="btn btn-primary btn-xs center-block"><i class="fa fa-caret-down"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="w-100-p">
                                <tbody>
                                    <tr>
                                        <td class="w-50-p">
                                            2155.850 BTC
                                        </td>
                                        <td class="w-50-p text-right">
                                            455229243.263 SC
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="float-right">
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="#">First</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="#">Prev</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="#">Next</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="#">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Open Orders -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Open Orders
                    <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-plus"></i></th>
                                <th>Order Date</th>
                                <th>Type</th>
                                <th>Bid/Ask</th>
                                <th>Units Filled SC</th>
                                <th>Units Total SC</th>
                                <th>Actual Rate</th>
                                <th>Estimated Total BTC</th>
                                <th><i class="fa fa-times"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-minus"></i></td>
                                <td>
                                    02/18/2018 05:36:12 PM
                                </td>
                                <td>Limit Sell</td>
                                <td>0.00000305</td>
                                <td>0.00000000</td>
                                <td>26089.00161498</td>
                                <td>
                                    0.00000000
                                </td>
                                <td>0.07937253</td>
                                <td>
                                    <i class="fa fa-times btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-minus"></i></td>
                                <td>
                                    02/18/2018 05:30:12 PM
                                </td>
                                <td>Limit Buy</td>
                                <td>0.00000300</td>
                                <td>0.00000000</td>
                                <td>27000.00161498</td>
                                <td>
                                    0.00000000
                                </td>
                                <td>0.07937253</td>
                                <td>
                                    <i class="fa fa-times btn btn-danger"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="input-sm form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-default">Search</button>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-8"></div>
                        <div class="col-lg-2">
                            <div class="input-group pull-right">
                                <select class="input-sm form-control">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Cancel All</option>
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default">Apply</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
