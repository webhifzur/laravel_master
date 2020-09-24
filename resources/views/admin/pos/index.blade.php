@extends('layouts.master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
                       
        <div class="card mb-4">
            <div class="card-header">
                <a class="btn btn-success btn-sm float-right" href="">Add supplier</a> 
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('pos.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <select name="customer_id" class="form-control" required>
                                        <option value="" disabled selected>Select a Customer</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->sup_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="product_id" class="form-control" required>
                                        <option value="" disabled selected>Select a Product</option>
                                        @foreach ($products_info as $product)
                                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="form-control" type="number" placeholder="Product price" name="product_price" value="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input class="form-control" type="number" placeholder="Product quantity" name="product_quantity" value="">
                                </div>
                                <button type="submit" class="btn btn-success ml-auto">Cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End first part --}}
        <div class="card mb-4">
            <div class="card-header"></div>
            <div class="card-body">
                <form action="" method="post">
                   @php
                        $total = 0;
                   @endphp
                    @forelse ($pos_info as $pos)
                        <div class="row">
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" placeholder="Product name" name="" value="{{ $pos->product_id }}">
                            </div>
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" placeholder="Price" name="" value="{{ $pos->product_price }}">
                            </div>
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" placeholder="quantity" name="" value="{{ $pos->product_quantity }}">
                            </div>
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" placeholder="total" name="" value="{{ ($pos->product_price)*($pos->product_quantity) }}">
                            </div>
                        </div>
                        @php
                            $total += ($pos->product_price)*($pos->product_quantity);
                        @endphp
                        @empty
                        <h4>no data</h4>
                        @endforelse
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Sub Total" name="" value="{{ $total }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Tex-5%" name="" value="{{ ($total*5)/100 }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="total" name="" value="{{ $total - (($total*5)/100) }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success ml-auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection