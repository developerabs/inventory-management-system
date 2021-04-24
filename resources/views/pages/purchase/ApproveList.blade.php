@extends('layouts.master')
@section('title','Purchase List')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Purchase List 
                        <a href="{{ route('purchase.add') }}" class="btn btn-sm btn-success float-right">Add New</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Purchase No</th>
                          <th>Date</th>
                          <th>Supplier Name</th> 
                          <th>Category</th> 
                          <th>Product Name</th> 
                          <th>Description</th> 
                          <th>Quantity</th>
                          <th>Unite Price</th>
                          <th>Buying Price</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->purchase_no }}</td>
                                <td>{{ date('d-m-Y',strtotime($item->date)) }}</td>
                                <td>{{ $item['supplier']['name'] }}</td>
                                <td>{{ $item['category']['name'] }}</td>
                                <td>{{ $item['product']['name'] }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    {{ $item->buying_qty }}
                                    {{ $item['product']['unite']['name'] }}
                                </td>
                                <td>{{ $item->unit_price }}</td>
                                <td>{{ $item->buying_price }}</td>
                                <td>
                                     <span style="background-color: red; color: #fff; padding: 4px 5px;">Pending</span>
                                </td>
                                <td>
                                    <a title="Approve" id="approveBtn" href="{{ route('purchase.approve',$item->id) }}" class="btn btn-sm btn-primary" id="delete"><i class="fas fa-check-circle"></i></a>
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
        $(document).on('click','#approveBtn',function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to approve this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = link;
                    Swal.fire(
                    'Approved!',
                    'Your have approved a purchase.',
                    'success'
                    )
                }
            });
        });
    });
  </script>
@endsection