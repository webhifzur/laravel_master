@extends('layouts.master')

@section('content')


<!-- Body Start -->

<main>
<div class="container-fluid">
<h4 class="mt-4">Tables</h4>
    
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.html">Products</a></li>
        <li class="breadcrumb-item"><a href="{{route('productcompany.index')}}">Product Brand</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    
    <div class="card mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-success btn-sm float-right">  Add Brand</button>
        </div>
        <div class="card-body">

        <form action="{{route('purchase.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label >suplier</label>
                    <select class="form-control" name="supplier_id" id="">
                        <option value="">select one</option>
                        @foreach ($suppliers_info as $supplier_info)
                            <option value="{{ $supplier_info->id }}">{{ $supplier_info->sup_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >purchase date</label>
                    <input type="date" class="form-control" name="pur_date">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Invoice No</label>
                    <input type="text" class="form-control" name="invoice_no">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Payment Type </label>
                    <select class="form-control" name="payment_type" id="">
                        <option value="">select one</option>
                        <option value="1">cash</option>
                        <option value="2">card</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Product</label>
                    <select class="form-control" name="product" id="">
                        <option value="">select one</option>
                         @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Product Quantity</label>
                    <input type="text" class="form-control" name="product_quantity">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Product Prize</label>
                    <input type="text" class="form-control" name="product_prize">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label >Total Prize</label>
                    <input type="text" class="form-control" name="product_total_prize">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button> 
        </div>
        </form>                   
            </div>
        </div>
    </div>
</main>

<!-- Body End -->

 @endsection

