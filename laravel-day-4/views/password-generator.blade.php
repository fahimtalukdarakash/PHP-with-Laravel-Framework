@extends('master')

@section('title')
    Password Generator
@endsection
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center text-success">Password Generator Program</h1>
                    <hr/>
                    <form action="{{route('password-generator')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Enter Your Password Length</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="given_length"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Your password:</label>
                            <div class="col-md-9">
                                <input type="text" value="{{session('result')}}" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
