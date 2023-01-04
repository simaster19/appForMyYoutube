@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA USER</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom">Quantity</span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA USER PREMIUM</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom"></span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA VERSI</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom"></span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA SHORTLINK</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom"></span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA USERAGENT</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom"></span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">DATA SOURCECODE</h5>
                    <p class="card-text"><span data-feather="layers" class="align-text-bottom"></span></p>
                    <a href="#" class="btn btn-primary">Visit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
