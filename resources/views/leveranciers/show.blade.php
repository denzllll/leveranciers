@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Leveranciers Details</h1>
                </div>
                <div class="col-sm-6">
                @if(!Illuminate\Support\Str::contains(request()->url(), 'restore-leveranciers'))
                    <a class="btn btn-default float-right"
                       href="{{ route('leveranciers.index') }}">
                       <i class="fas fa-solid fa-arrow-left"></i>   Back
                    </a>
                @else
                <a class="btn btn-default float-right"
                       href="{{ route('leveranciers.restoreIndex') }}">
                       <i class="fas fa-solid fa-arrow-left"></i>  Back
                    </a>
                @endif
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('leveranciers.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
