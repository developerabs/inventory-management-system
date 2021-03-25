@extends('layouts.master')
@section('title','User List')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>User List 
                        <a href="{{ route('users.add') }}" class="btn btn-sm btn-success float-right">Add New</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Role</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($alldata as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit',$item->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('users.delete',$item->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fas fa-trash"></i></a>
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