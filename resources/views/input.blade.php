@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-6 mb-xl-0">
                <div>
                <br>
                <br>
                <br>
                    <form action="{{ route('get.companyName') }} "method="get" enctype="multipart/form-data" class="row">
                    <h6 class="heading-small text-muted mb-4">{{ __('Company Symbol on Stock Exchange') }}</h6>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-alternative" placeholder="Enter company symbol" name="name">
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-primary" value="Search" name="searchFunction">
                            </div>
                        </div>
                    </form>
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