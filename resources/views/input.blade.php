@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div>
                    <form action="{{ route('get.companyName') }} "method="get" enctype="multipart/form-data" class="row">
                    <input type="text" value="DAWAJ NAZWE" name="name">
                    <br>
                    <input type="submit" value="wyślij Dzbana" name="elo">
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