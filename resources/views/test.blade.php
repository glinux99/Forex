<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta content="Responsive Bootstrap Multi-Purpose Crypto Trading User Interface" name="description" />
    <meta name="keywords" content="crypto, Bootstrap, bitcoins, ethereum, dogecoin, iota, ripple, siacoin, exchange, trading platform, crypto trading">
    <meta name="author" content="">
    <title>Tradify - Responsive Crypto/Stock Trading User Interface</title>
    <link rel="stylesheet" href="app/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="plugins/animo/animate%2banimo.css">
    <link rel="stylesheet" href="plugins/csspinner/csspinner.min.css">
    <link rel="stylesheet" href="app/css/app.css">
    <script src="plugins/modernizr/modernizr.js"></script>
    <script src="plugins/fastclick/fastclick.js"></script>
</head>

<body>
    <div id="overlayLoader">
        <div id="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    <section class="wrapperFullWidth">
        <nav class="navbar navbar-default navbar-top navbar-fixed-top">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <div class="brand-logo"><i class="fa fa-bitcoin"></i> TRADIFY</div>
                </a>
            </div>
            <div class="nav-wrapper">
                <ul class="nav navbar-nav mt0">
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                            <strong><i class="fa fa-chevron-down"></i> Markets</strong>
                            <div class="label label-primary"><i class="fa fa-line-chart"></i></div>
                        </a>
                        <ul class="dropdown-menu col-md-4 col-sm-6 col-xs-12">
                            <li>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Coin</th>
                                                <th>Price</th>
                                                <th>Vol</th>
                                                <th>CHG</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i> <a href="#">BCH</a></td>
                                                <td>
                                                    0.16000009
                                                </td>
                                                <td>
                                                    <em class="fa fa-refresh fa-fw text-muted"></em>2967.720
                                                </td>
                                                <td class="text-green">
                                                    +17.84
                                                </td>
                                                <td>Bitcoin Cash</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-arrows-v text-primary"></i><a href="#"> DGB</a>
                                                </td>
                                                <td>0.00000402</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>90.224</td>
                                                <td class="text-primary">+0.00</td>
                                                <td>DigiByte</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-down text-danger"></i><a href="#"> DOGE</a>
                                                </td>
                                                <td>0.00000055</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>169.631</td>
                                                <td class="text-danger">-1.79</td>
                                                <td>Dogecoin</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i><a href="#"> ETH</a>
                                                </td>
                                                <td>0.10039995</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>2887.720</td>
                                                <td class="text-green">+1.35</td>
                                                <td>Ethereum</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i><a href="#"> LTC</a>
                                                </td>
                                                <td>0.01790003</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>1115.235</td>
                                                <td class="text-green">+1.58</td>
                                                <td>Litecoin</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i><a href="#"> NXT</a>
                                                </td>
                                                <td>0.00002241</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>100.305</td>
                                                <td class="text-green">+2.56</td>
                                                <td>NXT</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i><a href="#"> SC</a>
                                                </td>
                                                <td>0.00000272</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>131.014</td>
                                                <td class="text-green">+1.87</td>
                                                <td>Siacoin</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-down text-danger"></i><a href="#"> STR</a>
                                                </td>
                                                <td>0.00004322</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>1196.608</td>
                                                <td class="text-danger">-0.05</td>
                                                <td>Stellar</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-level-up text-green"></i><a href="#"> XRP</a>
                                                </td>
                                                <td>0.00009485</td>
                                                <td><em class="fa fa-refresh fa-fw text-muted"></em>1633.576</td>
                                                <td class="text-green">+5.10</td>
                                                <td>Ripple</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
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
                                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-50-p progress-bar-success">
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
                            <li><a href="#">Profile</a>
                            </li>
                            <li><a href="#">Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            <section class="main-content">
                <button type="button" class="btn btn-labeled btn-primary pull-right">
                    <span class="btn-label"><i class="fa fa-dollar"></i>
                    </span>Goto Wallet</button>
                <h3>Dashboard
                </h3>
                <div class="row">
                    <div class="col-md-9">
                        <!-- First Row Starts Here -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                                    <div class="panel-body bg-primary">
                                        <div class="row row-table row-flush">
                                            <div class="col-xs-12">
                                                <p class="mb0">$759,781,417.92 <em class="fa fa-level-up">
                                                    </em>
                                                </p>
                                                <h4 class="m0">Market Cap</h4>
                                                <span class="m-t-10"><i class="fa fa-dollar"></i> Total Market Capital
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
                                                <span class="f-left m-t-10">
                                                    <i class="fa fa-dollar"></i> 24h Trade Volume
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
                                                <h4 class="m0">Circ Supply</h4>
                                                <span class="m-t-10">
                                                    <i class="text-c-green f-16 fa fa-refresh"></i> Circulating Supply
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
                                                <h4 class="m0">Total Supply</h4>
                                                <span class="f-left m-t-10">
                                                    <i class="fa fa-money"></i> Total Supply
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- First Row Ends Here -->

                        <!-- Chart Starts Here -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-collapse">
                                        <div class="panel-body">
                                            <h4>BTC-SC</h4>
                                            <div id="candlestickChart" class="h-500">

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
                                <div class="panel-title">Coin Status</div>
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
                                            <strong>Last Price</strong>
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
                                            <strong>24Hr Change</strong>
                                            <p class="m0">
                                                <small class="text-green">+1.35%</small>
                                            </p>
                                            <p><i class="fa fa-plus"></i> Gainer <i class="fa fa-level-up text-green"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="media">
                                        <div class="pull-left">
                                            <span class="fa-stack fa-lg">
                                                <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                                <em class="fa fa-level-down fa-stack-1x fa-inverse text-white"></em>
                                            </span>
                                        </div>
                                        <div class="media-body clearfix">
                                            <strong>24Hr Low</strong>
                                            <p class="m0">
                                                <small class="text-danger">$0.02</small>
                                            </p>
                                            <p><i class="fa fa-btc"></i> 0.00000261 <i class="fa fa-level-down text-danger"></i></p>
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
                                            <strong>24Hr High</strong>
                                            <p class="m0">
                                                <small class="text-green">$0.02</small>
                                            </p>
                                            <p><i class="fa fa-btc"></i> 0.00000261 <i class="fa fa-level-up text-green"></i></p>
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
                                            <p><small>Posted by <span class="__cf_email__" data-cfemail="094368646c7a496c71686479656c">[email&#160;protected]</span></small></p>
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
                                            <p><small>Posted by <span class="__cf_email__" data-cfemail="054f6c68687c45607d6468756960">[email&#160;protected]</span></small></p>
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
                                            <p><small>Posted by <span class="__cf_email__" data-cfemail="82c4f0e3ece9fbc2e7fae3eff2eee7">[email&#160;protected]</span></small></p>
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
                                                        <td class="p-0">
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
                    <!-- Market History -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Market History
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
                                        <div class="text-right">
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
                    <!-- My Order History -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">My Order History
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
                                        <div class="text-right">
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
        </section>
    </section>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/chosen/chosen.jquery.js"></script>
    <script src="plugins/velocity/velocity.js"></script>
    <script src="plugins/velocity/velocity.ui.js"></script>
    <script src="plugins/slider/js/bootstrap-slider.js"></script>
    <script src="plugins/filestyle/bootstrap-filestyle.js"></script>
    <script src="plugins/animo/animo.js"></script>
    <script src="plugins/sparklines/jquery.sparkline.js"></script>
    <script src="plugins/slimscroll/jquery.slimscroll.js"></script>
    <script src="plugins/datatable/media/js/jquery.dataTables.js"></script>
    <script src="plugins/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
    <script src="plugins/datatable/extensions/ColVis/js/dataTables.colVis.js"></script>
    <script src="tradify/highcharts.js"></script>
    <script src="tradify/exporting.js"></script>
    <script src="plugins/datatable/extensions/ColVis/js/dataTables.colVis.js"></script>
    <!--[if lt IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="app/js/tradify.js"></script>
    <script>
        $(document).ready(function() {
            // Candlestick
            $.getJSON('tradify/data.json', function(data) {

                // create the chart
                Highcharts.stockChart('candlestickChart', {

                    chart: {},


                    rangeSelector: {
                        selected: 1
                    },

                    series: [{
                        type: 'candlestick',
                        name: 'SC-BTC',
                        data: data,
                        dataGrouping: {
                            units: [
                                [
                                    'week', // unit name
                                    [1] // allowed multiples
                                ],
                                [
                                    'month',
                                    [1, 2, 3, 4, 6]
                                ]
                            ]
                        }
                    }]
                });
            });
        });
    </script>
</body>

</html>
