@extends('layouts.master')
@section('title','Suppliers List')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Suppliers List 
                        <a href="{{ route('suppliers.add') }}" class="btn btn-sm btn-success float-right">Add New</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mobile_no }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>
                                @php
                                    $count_data = App\Models\ProductsModel::where('supplier_id',$item->id)->count();
                                @endphp
                                <td>
                                    <a href="{{ route('suppliers.edit',$item->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    @if ($count_data < 1)
                                    <a href="{{ route('suppliers.delete',$item->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fas fa-trash"></i></a>    
                                    @endif
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- /.row (main row) -->
@endsection
@section('scripts')
    
<script>
    $(function(){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link;
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            });
        });
    });
  </script>
@endsection