@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right btn-lg" data-toggle="modal" data-target="#myModal">
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
</section>
@endsection
