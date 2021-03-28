@extends('layouts.master')
@section('title','Add New Supplier')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Supplier 
                        <a href="{{ route('suppliers.view') }}" class="btn btn-sm btn-success float-right">User List</a>
                    </h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">Something want wrong !</div>
                @endif
                <form action="{{ route('suppliers.store') }}" method="POST" role="form" id="quickForm">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Supplier Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Supplier name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_no">Supplier Phone</label>
                                    <input type="text" name="mobile_no" value="{{ old('mobile_no') }}" class="form-control" id="mobile_no" placeholder="Supplier phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Supplier Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Supplier email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Supplier Address</label>
                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="address" placeholder="Supplier Address">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <button class="btn btn-sm btn-primary" type="submit">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
@endsection
@section('scripts')
  
<!-- /.row (main row) -->
<script type="text/javascript">
    $(document).ready(function () {
      $('#quickForm').validate({
        rules: {
          name: {
            required: true,
          },
          mobile_no: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          address: {
            required: true,
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>  
@endsection