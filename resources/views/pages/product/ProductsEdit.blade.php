@extends('layouts.master')
@section('title','Edit Product')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Product 
                        <a href="{{ route('products.view') }}" class="btn btn-sm btn-success float-right">Products</a>
                    </h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">Something want wrong !</div>
                @endif
                <form action="{{ route('products.update',$editData->id) }}" method="POST" role="form" id="quickForm">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Supplier Name</label>
                                    <select class="form-control select2" name="supplier_id" style="width: 100%;">
                                        <option disabled>Select Supplier Name</option>
                                        @foreach ($supplier as $item)
                                            <option value="{{ $item->id }}" {{ ($editData->supplier_id == $item->id)?'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                        <option disabled>Select Category Name</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}" {{ ($editData->category_id == $item->id)?'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Unite Name</label>
                                    <select class="form-control select2" name="unite_id" style="width: 100%;">
                                        <option disabled>Select Unite Name</option>
                                        @foreach ($unite as $item)
                                        <option value="{{ $item->id }}" {{ ($editData->unit_id == $item->id)?'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" value="{{ $editData->name }}" class="form-control" id="name" placeholder="Unite name">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <button class="btn btn-sm btn-primary" type="submit">Update</button>
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