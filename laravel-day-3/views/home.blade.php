@extends('master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0">
                        <img src="{{asset($product['image'])}}" alt=""/>
                        <div class="card-body">
                            <h4>{{$product['name']}}</h4>
                            <p>TK. {{$product['price']}}</p>
                            <hr/>
                            <a href="{{route('detail',['id'=>$product['id']])}}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
