@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-6 mb-xl-0">
                <div>
                    <form action="{{ route('get.companyName') }} "method="get" enctype="multipart/form-data" class="row">
                        
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input type="text" placeholder="Enter company name" name="name">
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-primary my-2" value="Search" name="elo">
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