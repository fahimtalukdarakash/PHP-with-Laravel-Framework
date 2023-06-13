@extends('master')

@section('title')
    Add Product Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">Add Product Form</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('new-product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Category</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_category"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Brand</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_brand"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="product_price"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="product_image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="product_description"></textarea>
                                </div>
                            </div>
{{--                            <div class="row mb-3">--}}
{{--                                <label class="col-md-3">Full Name</label>--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <input type="text" value="{{session('message')}}" class="form-control"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create New Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
