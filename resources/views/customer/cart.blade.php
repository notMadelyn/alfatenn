@extends('layouts.app')

@section('navbar')
    @php $page = "carts"; @endphp
    @include('layouts.nav.customer')
@endsection

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card mb-3">
                    @if ($carts->count() < 1)
                        <div class="row text-center">
                            <div class="col">
                                <p>NOT YET AN ORDER</p>
                            </div>
                        </div>
                    @else
                        @foreach ($carts as $d)
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('/storage/img/' . $d->product->thumbnail) }}"
                                        class="img-fluid rounded-start " alt="..." height="100px" width="100px">
                                        
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $d->product->name }}</h5>
                                        <p class="card-text">Rp.{{ $d->product->price }}</p>
                                        <p class="card-text">Qty : {{ $d->quantity }}</p>
                                        <button type="button" class="btn shadow btn-outline-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editQty-{{ $d->id }}">
                                            Edit
                                        </button>

                                        <button type="button" class="btn shadow btn-outline-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $d->id }}">
                                            Delete
                                        </button>
                                        {{-- <a href="{{ route('customer.carts.delete', $d->id) }}"
                                            class="btn shadow btn-outline-danger btn-sm">delete</a> --}}
                                            <hr class="divider">
                                    </div>
                                </div>
                            </div>

                            {{-- DELETE --}}
                            <div class="modal fade" id="delete{{ $d->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action={{ route('customer.carts.delete', $d->id) }} method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                <center class="mt-3">
                                                    <h5>
                                                        YAKIN MAU APUS INI DEK ?
                                                    </h5>
                                                </center>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-danger">Hapus!</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- DELETE --}}

                            {{-- modal edit--}}
                            <div class="modal fade" id="editQty-{{ $d->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('customer.editCart') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('/storage/products/' . $d->product->thumbnail) }}"
                                                        alt="{{ $d->product->thumbnail }}" class="card-img" height="100%" width="100%">
                                                </div>
                                                <h4><strong>{{ $d->product->name }}</strong></h4>
                                                <div class="mt-3 mb-3">
                                                    Desc: {{ $d->product->desc }}
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-md-6">
                                                        <div>
                                                            <span>Rp.
                                                                {{ $d->product->new_price !== $d->product->price ? $d->product->new_price : '' }}</span>
                                                            <span>{!! $d->product->new_price !== $d->product->price ? "<s>Rp. {$d->product->price} </s>" : $d->product->price !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="d-flex justify-content-end mt-1">

                                                            <h6 class="mt-1" style="font-size:18px;">Jumlah: </h6>
                                                            <input min="1" type="number"
                                                                class="form-control ms-3 w-50   h-25 text-center input-sm"
                                                                name="quantity" value="{{ $d->quantity }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $d->product->id }}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Edit To Chart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- tutup modal --}}

                        @endforeach
                    @endif
                </div>
            </div>

            <div class="col-4">
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Transaction</h5>
                        @if ($carts->count() < 1)
                            <p class="text-center mt-4">NO YET TRANSACTION</p>
                        @else
                            <div class="row">
                                @foreach ($carts as $item)
                                    <div class="col-6">
                                        {{ $item->product->name }} x {{ $item->quantity }}
                                    </div>
                                    <div class="col-6">
                                        Rp.{{ $item->quantity * $item->product->price }}
                                    </div>
                                @endforeach
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col float-start">
                                    <p class="card-text"><strong>Total</strong></p>
                                </div>
                                <div class="col float-end">{{ $total_harga }}</div>
                            </div>
                        @endif
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <form action="">
                            <div class="row">
                                {{-- <button class="btn btn-success mt-3" type="submit"
                                    {{ $carts->count() < 1 ? 'disabled' : '' }}>Checkout!</button> --}}
                                    {{-- <a href="{{ route('customer.cart.checkout') }}" class="btn btn-primary"> Checkout</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection