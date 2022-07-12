@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home bg-image2 home-small" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-wrapper home-intro row vertical-content">
                    <div class="col-md-6 text-center">
                        <h1>Digital Currency Exchange</h1>
                        <h4 class="normal-font-w">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</h4>
                        <a href="index.html" class="btn btn-custom"><i class="fa fa-line-chart"></i> Market</a>
                        <a href="https://www.youtube.com/watch?v=tgEFgPk-cRY" class="btn btn-secondary popup-video"><i class="glyphicon glyphicon-play"></i> How To Trade?</a>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- END HOME -->



<!-- SERVICES -->
<section class="section bg-lightgray" id="About">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">

                    <p><span class="fa fa-bar-chart color-blue"></span> What We Do</p>
                    <h2 class="text-uppercase text-blue">Trade Confidently</h2>
                </div>
            </div>
            <div class="col-lg-12 col-lg-offset-2 text-center">
                <hr class="light">
                <p class="text-faded">
                    We provide individuals and businesses a world class experience to buy and sell cutting-edge cryptocurrencies
                    and digital tokens. Crypto is the go-to spot for traders who demand lightning fast trade execution,
                    stable wallets, and industry-best security practices. Whether you are new to trading and cryptocurrencies, or a veteran to both, It
                    was created for you!
                </p>
                <a href="index-2.html" class="btn btn-primary">Get Started Now <i class="fa fa-sign-in"></i></a>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end SERVICES -->

<!-- FEATURES -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-money fa-3x color-blue"></i>
                <h4 class="title">Low Fee</h4>
                <p>0% maker fee and 0.1% taker fee makes us one of the most competitive exchanges on the market</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-lock fa-3x color-blue"></i>
                <h4 class="title">Security</h4>
                <p>The vast majority of digital assets are stored securely in offline storages</p>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-users fa-3x color-blue"></i>
                <h4 class="title">Experienced Team</h4>
                <p>Our experienced team helps us build the best product and deliver first class service to our
                    clients</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <i class="fa fa-support fa-3x color-blue"></i>
                <h4 class="title">24/7 Support</h4>
                <p>Our multilingual 24/7 support allows us to keep in touch with customers in all time zones and
                    regions</p>
            </div>


        </div>
        <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end FEATURES -->
<!-- Currencies -->
<section class="section bg-lightgray" id="Currencies">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <p><span class="fa fa-money color-blue"></span> Avaible Currencies to Trade</p>
                    <h2 class="text-uppercase text-blue text-blue">Availble Currenciess</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/ada.png')}}" alt="ada">
                </a>
                <span class="label label-primary">Cardano</span><span class="label bg-warning">New</span>

            </div>

            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/ark.png')}}" alt="ark">
                </a>
                <span class="label label-primary">Ark</span><span class="label bg-warning">New</span>

            </div>

            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/trx.png')}}" alt="trx">
                </a>
                <span class="label label-primary">Tron</span><span class="label bg-warning">New</span>
            </div>

            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/eos.png')}}" alt="eos">
                </a>
                <span class="label label-primary">Eos</span><span class="label bg-warning">New</span>
            </div>

            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/qtum.png')}}" alt="qtum">
                </a>
                <span class="label label-primary">Qtum</span><span class="label bg-warning">New</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/btc.png')}}" alt="btc">
                </a>
                <span class="label label-primary">Bitcoin</span><span class="label bg-warning">Top</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/eth.png')}}" alt="eth">
                </a>
                <span class="label label-primary">Ethereum</span><span class="label bg-warning">Old</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/ltc.png')}}" alt="ltc">
                </a>
                <span class="label label-primary">Litecoin</span><span class="label bg-warning">Old</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/dash.png')}}" alt="dash">
                </a>
                <span class="label label-primary">Dash</span><span class="label bg-warning">Old</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/sc.png')}}" alt="sc">
                </a>
                <span class="label label-primary">Siacoin</span><span class="label bg-warning">Old</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/xem.png')}}" alt="xem">
                </a>
                <span class="label label-primary">Nem</span><span class="label bg-warning">Old</span>
            </div>
            <div class=" col-md-1 col-sm-2 col-xs-4 m-t-9 text-center currency-label">
                <a href="index-2.html">
                    <img class="w-80" src="{{ asset('assets/images/logos/rep.png')}}" alt="rep">
                </a>
                <span class="label label-primary">Augur</span><span class="label bg-warning">Old</span>
            </div>
        </div>
    </div>
    </div> <!-- end container -->
</section>
<!-- end Currencies -->
<!-- BLOG -->
<section class="section bg-lightgray" id="blog">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">

                    <p><span class="fa fa-bullhorn color-blue"></span>From our Blog</p>
                    <h2 class="text-uppercase text-blue">News & Stories</h2>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="blog-box">
                    <div class="blog-box-content">
                        <h4 class="blog-grid-title-md"><a href="#">Architecto beatae vitae dicta sunt explicabo</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>
                    </div>
                    <div class="blog-box-footer text-center">
                        <a href="#" class="btn btn-sm btn-custom"> Read more </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="blog-box">
                    <div class="blog-box-content">
                        <h4 class="blog-grid-title-md"><a href="#">Architecto beatae vitae dicta sunt explicabo</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>
                    </div>
                    <div class="blog-box-footer text-center">
                        <a href="#" class="btn btn-sm btn-custom"> Read more </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="blog-box">
                    <div class="blog-box-content">
                        <h4 class="blog-grid-title-md"><a href="#">Architecto beatae vitae dicta sunt explicabo</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>
                    </div>
                    <div class="blog-box-footer text-center">
                        <a href="#" class="btn btn-sm btn-custom"> Read more</a>
                    </div>
                </div>
            </div>

        </div> <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end BLOG -->
@endsection
