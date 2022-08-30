@extends('layouts.app')

@section('navbar')
    @include('layouts.nav.customer')
@endsection

@section('content')

<div class="container">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row justify-content-center">
        @foreach ($categories as $key => $category)
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                   <strong> {{ ucfirst($category->name) }}</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($category->products as $index => $product)
                        <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Detail Product</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('customer.addToCart') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img src="{{ asset('/img/'.$product->thumbnail) }}" alt="{{ $product->thumbnail }}" width="290px;">
                                    </div>
                                   <h4><strong>{{ $product->name }}</strong></h4>
                                   <div>
                                    {!! $product->new_price !== $product->price ? "<s>$product->price</s>" : $product->price !!}
                                    {{ $product->new_price !== $product->price ? $product->new_price : '' }}
                                </div>
                                   
                                   Description : <p>{{ $product->desc }}</p>
                                  Jumlah : <input type="number" class="form-control" name="quantity"> 
                                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-success">Add To Chart</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>

                            <div class="col col-2">
                                <div class="card border-0">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('/img/'.$product->thumbnail) }}" alt="{{ $product->thumbnail }}" width="100px;">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <strong>{{ $product->name }}</strong>
                                        </div>
                                        <div>
                                            {!! $product->new_price !== $product->price ? "<s>$product->price</s>" : $product->price !!}
                                            {{ $product->new_price !== $product->price ? $product->new_price : '' }}
                                        </div>
                                        <div class="d-grid gap-2 mt-2">
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
