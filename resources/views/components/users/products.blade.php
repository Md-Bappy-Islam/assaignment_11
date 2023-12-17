@extends('layout.app')
@section('name')


<div class="main-content">
    <div class="page-content">
        <div class="col-md-4">
            <h4 class="mb-4">Our Products</h4>
        </div>
      
        <div>
            <div class="col-md-2">
                @foreach ($products as $product )
                <div class="product-card">
                    <div class="product-card-img">
                        <label class="stock bg-success">In Stock</label>
                        <img src="{{ asset('asset/images/mac-img.png') }}" alt="Laptop">
                    </div>
                    <div class="product-card-body">
                        <p class="product-brand">hp</p>
                        <h5 class="product-name">
                            <a href="">
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
                    @endforeach
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>


@endsection