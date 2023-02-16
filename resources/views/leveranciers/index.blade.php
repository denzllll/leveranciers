@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (request()->path() !== 'restore-leveranciers')
                <h1>Leveranciers</h1>
                @else
                <h1>Restore leveranciers</h1>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-end">
                    @if (request()->path() !== 'restore-leveranciers')
                    @can('role',['admin'])
                    <a class="btn btn-secondary mr-2" href="{{ route('leveranciers.restoreIndex') }}">
                    <i class="fas fa-trash-restore"></i>   Restore
                    </a>
                    @endcan

                    <a class="btn btn-primary " href="{{ route('leveranciers.create') }}">
                    <i class="fas fa-solid fa-plus"></i>   Add New
                    </a>
                    @else

                    <a class="btn btn-default float-right" href="{{ route('leveranciers.index') }}">
                    <i class="fas fa-solid fa-arrow-left"></i>  Back
                    </a>

                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('leveranciers.table')

            <div class="card-footer clearfix float-right">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
