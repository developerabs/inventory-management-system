@extends('layouts.master')
@section('title','User List')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add User 
                        <a href="{{ route('users.view') }}" class="btn btn-sm btn-success float-right">User List</a>
                    </h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">Something want wrong !</div>
                @endif
                <form action="{{ route('users.update',$editData->id) }}" method="POST"  id="quickForm2">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select class="form-control select2" name="role" style="width: 100%;">
                                        <option selected="selected" disabled>Select User Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $editData->name }}" class="form-control" id="name" placeholder="User name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="{{ $editData->mobile }}" class="form-control" id="phone" placeholder="User phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $editData->email }}" class="form-control" id="email" placeholder="User email">
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
      $('#quickForm2').validate({
        rules: {
          role: {
            required: true,
          },
          name: {
            required: true,
          },
          phone: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 6
          },
          password2: {
            required: true,
            equalTo: '#Password'
          },
          terms: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          terms: "Please accept our terms"
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