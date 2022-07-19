    @extends('layouts.admin')
    @section('content')
    <section class="main-content">
        <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" data-target="#devise">
            <span class="btn-label"><i class="fa fa-user"></i>
            </span>{{__("Nouvelle devise")}}</button>
        <h3>{{__("VALEUR DE DEVISES")}}
        </h3>
        <div class="row">
            <!-- My Order History -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__("Mon historique d'Activites")}}
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                            <em class="fa fa-minus"></em>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Closed Date</th>
                                    <th>Opened Date</th>
                                    <th>Type</th>
                                    <th>Bid/Ask</th>
                                    <th>Units Filled SC</th>
                                    <th>Units Total SC</th>
                                    <th>Actual Rate</th>
                                    <th>Cost/Proceeds</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        01/29/2018 06:29:22 PM
                                    </td>
                                    <td>01/29/2018 06:27:08 PM</td>
                                    <td>Limit Sell</td>
                                    <td>0.00000384</td>
                                    <td>25953.89501312</td>
                                    <td>25953.89501312</td>
                                    <td>0.00000383</td>
                                    <td>0.09941380</td>
                                </tr>
                                <tr>
                                    <td>
                                        01/29/2018 06:29:22 PM
                                    </td>
                                    <td>01/29/2018 06:27:08 PM</td>
                                    <td>Limit Sell</td>
                                    <td>0.00000384</td>
                                    <td>25953.89501312</td>
                                    <td>25953.89501312</td>
                                    <td>0.00000383</td>
                                    <td>0.09941380</td>
                                </tr>
                                <tr>
                                    <td>
                                        01/29/2018 06:29:22 PM
                                    </td>
                                    <td>01/29/2018 06:27:08 PM</td>
                                    <td>Limit Buy</td>
                                    <td>0.00000384</td>
                                    <td>25953.89501312</td>
                                    <td>25953.89501312</td>
                                    <td>0.00000383</td>
                                    <td>0.09941380</td>
                                </tr>
                                <tr>
                                    <td>
                                        01/29/2018 06:29:22 PM
                                    </td>
                                    <td>01/29/2018 06:27:08 PM</td>
                                    <td>Limit Sell</td>
                                    <td>0.00000384</td>
                                    <td>25953.89501312</td>
                                    <td>25953.89501312</td>
                                    <td>0.00000383</td>
                                    <td>0.09941380</td>
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
