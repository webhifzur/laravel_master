@extends('layouts.master')

@section('content')
<!-- Body Start -->

<main>
  <div class="container-fluid">
    <h4 class="mt-4">Tables</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Supplier</a></li>
        <li class="breadcrumb-item active">Add Supplier</li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <form action="{{ route('supplier.store') }}" method="post">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">sup name</label>
            <input type="text" class="form-control" name="sup_name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">sup phone</label>
            <input type="number" class="form-control" name="sup_phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">sup email</label>
            <input type="email" class="form-control" name="sup_email">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">sup Address</label>
            <input type="text" class="form-control" name="sup_Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">acc payable</label>
            <input type="text" class="form-control" name="acc_payable">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection

