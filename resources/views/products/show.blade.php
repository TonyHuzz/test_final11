@extends('layouts.master')

@section('title','菜單資訊')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$product->name}}
            <small>-{{$product->type}}</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('products.index')}}">菜單</a>
            </li>
            <li class="breadcrumb-item active">菜單資訊</li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{asset($product->img)}}">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">{{$product->detail}}</h3>
                <br><br>
                <h2 class="my-2">${{$product->price}}</h2>
                <br><br>
                <button class="btn btn-sm btn-primary" style="height: 50px;width: 200px" type="submit">加入購物車</button>
            </div>
        </div>
        <!-- /.row -->
@endsection
