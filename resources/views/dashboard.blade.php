@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <!-- Card stats -->
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Company Info</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Company symbol</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Primary exchange</th>
                                    <th scope="col">Open value</th>
                                    <th scope="col">Close value</th>
                                    <th scope="col">Latest update</th>
                                    <th scope="col">Change ($)</th>
                                    <th scope="col">Percent Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->symbol }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->companyName }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->primaryExchange }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->open }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->close }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->latestTime }}
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->change }} $
                                    </th>
                                    <th scope="column">
                                        {{ $nameResponseJSON->quote->changePercent }} %
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">{{ $nameResponseJSON->news[0]->source }}</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $nameResponseJSON ->news[0]->summary}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">{{ $nameResponseJSON->news[1]->source }}</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $nameResponseJSON->news[1]->summary}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">{{{ $nameResponseJSON->news[2]->source}}}</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $nameResponseJSON->news[2]->summary}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush