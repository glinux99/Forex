@extends('layouts.admin')
@section('content')
<section class="main-content">
    <button type="button" class="btn btn-labeled btn-primary pull-right btn-lg" data-toggle="modal" data-target="#devise">
        <span class="btn-label"><i class="fa fa-user"></i>
        </span>{{__("Rapport de caisse")}}</button>
    <h3>{{__("TRANSACTIONS")}}
    </h3>
    <div class="row">
        <!-- Market History -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{__("Historique des Activites des Agents")}}
                    <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Buy/Sell</th>
                                <th>Bid/Ask</th>
                                <th>Total Units SC</th>
                                <th>Total Cost SC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-green">Buy <i class="fa fa-arrow-up"></i></td>
                                <td>0.00000276</td>
                                <td>1627.72581489</td>
                                <td>0.00449252</td>
                            </tr>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-danger">Sell <i class="fa fa-arrow-down"></i></td>
                                <td>0.00000276</td>
                                <td>2627.72581489</td>
                                <td>0.00749252</td>
                            </tr>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-danger">Sell <i class="fa fa-arrow-down"></i></td>
                                <td>0.00000276</td>
                                <td>2627.72581489</td>
                                <td>0.00749252</td>
                            </tr>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-danger">Sell <i class="fa fa-arrow-down"></i></td>
                                <td>0.00000276</td>
                                <td>2627.72581489</td>
                                <td>0.00749252</td>
                            </tr>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-danger">Sell <i class="fa fa-arrow-down"></i></td>
                                <td>0.00000276</td>
                                <td>2627.72581489</td>
                                <td>0.00749252</td>
                            </tr>
                            <tr>
                                <td>
                                    02/18/2018 06:02:45 PM
                                </td>
                                <td class="text-green">Buy <i class="fa fa-arrow-up"></i></td>
                                <td>0.00000276</td>
                                <td>1627.72581489</td>
                                <td>0.00449252</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-right">
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="javascript:void(0);">First</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="disabled"><a href="javascript:void(0);">Prev</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li class="active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li><a href="javascript:void(0);">5</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="javascript:void(0);">Next</a></li>
                                </ul>
                                <ul class="pagination pagination-sm pagi-margin">
                                    <li><a href="javascript:void(0);">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
