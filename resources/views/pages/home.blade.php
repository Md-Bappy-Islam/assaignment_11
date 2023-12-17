@extends('layout.app')
@section('name')


<div class="main-content">
    <div class="page-content">
        <div class="col-md-12">
            <a href="/add_product" class="btn btn-danger col-md-2 mb-5 mt-2"> Add Product </a>
            <h4 class="mb-4">Our Products</h4>
        </div>
        <div class="col-md-3">
            <div class="product-card">
                <div class="product-card-img">
                    <label class="stock bg-success">In Stock</label>
                    <img src="{{ asset('asset/images/mac-img.png') }}" alt="Laptop">
                </div>
                <div class="product-card-body">
                    <p class="product-brand">HP</p>
                    <h5 class="product-name">
                        <a href="">
                            HP Laptop 
                        </a>
                    </h5>
                    <div>
                        <span class="selling-price">$500</span>
                        <span class="original-price">$799</span>
                    </div>
                    <div class="mt-3">
                        <a href="" class="btn btn-primary col-md-7">Add To Cart</a>
                        <a href="" class="btn  btn-danger col-md-4"> View </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection