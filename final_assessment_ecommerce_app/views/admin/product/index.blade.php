@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">Add Product Form</div>
            <div class="card-body">
                <p class="text-center text-success">{{session('message')}}</p>
                <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="category" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Brand</label>
                        <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Status</label>
                        <div class="col-sm-10">
                            <label><input type="radio" name="status" value="1"/>Published</label>
                            <label><input type="radio" name="status" value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success" value="Create New Product"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
