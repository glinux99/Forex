@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="row gutters-10">
            <div class="col-lg-6">
                <div class="row gutters-10">
                    <div class="col-6">
                        <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Membre et Clients")
                                </div>
                                <div class="h3 fw-700 mb-3">
                                    200
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Ventes")
                                </div>
                                <div class="h3 fw-700 mb-3">63</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Produits categorie")
                                </div>
                                <div class="h3 fw-700 mb-3">{300</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Marque de produit")
                                </div>
                                <div class="h3 fw-700 mb-3">300</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row gutters-10">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0 fs-14">@lang("Benefices")</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="pie-1" class="w-100" height="305"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0 fs-14">@lang("Stock")</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="pie-2" class="w-100" height="305"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row gutters-10">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">@lang("Monnaie les plus echanges")</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-1" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">@lang("Monnaie en stock")</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-2" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .aiz-main-content -->
@endsection
