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
                
                <a class="btn btn-success btn-sm float-right" href="{{route('productcompany.create')}}">Add Brand</a> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>SL</th>  
                            <th>sup name</th>  
                            <th>sup email</th>  
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>SL</th>  
                            <th>sup name</th>  
                            <th>sup email</th>  
                            <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @forelse($suppliers_info as $supplier_info)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{ $supplier_info->sup_name }}</td>
                                <td>{{ $supplier_info->sup_email }}</td>
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




