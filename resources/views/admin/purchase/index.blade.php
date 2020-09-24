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
                
                <a class="btn btn-success btn-sm float-right" href="{{route('productcategory.create')}}">Add Category</a> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>supplier name</th>
                                <th>purchase date</th>
                                <th>invoice no</th>
                                <th>product name</th>
                                <th>total price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($purchases_info as $purchase_info)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$purchase_info->suplier->sup_name}}</td>
                                <td>{{$purchase_info->pur_date}}</td>
                                <td>{{$purchase_info->invoice_no}}</td>
                                <td>{{$purchase_info->productname->product_name}}</td>
                                <td>{{$purchase_info->product_total_prize}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary">view</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @empty 
                            @endforelse
                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection