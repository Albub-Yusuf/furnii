@extends('layouts.backend.master')
@section('mainContent')
    @php

           $total_admins = \App\User::count();
           $total_categories = \App\Category::count();
           $total_products = \App\Product::count();
    @endphp

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1"></h2>
                    <p><a href="{{route('product.index')}}">Products: {{$total_products}}</a></p>
                    <div class="chartjs-wrapper">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1"></h2>
                    <p><a href="{{route('category.index')}}">Categories: {{$total_categories}} </a></p>
                    <div class="chartjs-wrapper">
                        <canvas id="dual-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1"></h2>
                    <p><a href="{{route('user.index')}}">Users : {{$total_admins}}</a></p>
                    <div class="chartjs-wrapper">
                        <canvas id="area-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1"></h2>
                    <p>Visitors</p>
                    <div class="chartjs-wrapper">
                        <canvas id="line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h3>Recent Activities</h3>


@endsection
