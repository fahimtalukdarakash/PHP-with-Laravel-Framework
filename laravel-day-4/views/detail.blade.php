@extends('master')
@section('title')
    Product Detail
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset($singleProduct['image'])}}" alt=""/>
                        <div class="card-img-overlay">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$singleProduct['name']}}</h1>
                        <h4>TK. {{$singleProduct['price']}}</h4>
                        <p>{{$singleProduct['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
