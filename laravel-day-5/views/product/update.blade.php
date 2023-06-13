@extends('master')

@section('title')
    Update Product Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Update Product Form</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('update-product', ['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_name}}" class="form-control" name="product_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Category</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_category}}" class="form-control" name="product_category"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Brand</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_brand}}" class="form-control" name="product_brand"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$product->product_price}}" class="form-control" name="product_price"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="product_image"/>
                                    <img src="{{asset($product->product_image)}}" alt="" height="100" width="120"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="product_description">{{$product->product_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
