@extends('layouts.master')
@section('title','Change Password')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Change Password </h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">Something want wrong !</div>
                @endif
                <form action="{{ route('profile.update.password') }}" method="POST" role="form" id="quickForm4">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Your old password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Password">New Password</label>
                                    <input type="password" name="new_password" class="form-control" id="Password" placeholder="Your new password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Password2">Confirm Password</label>
                                    <input type="password" name="password2" class="form-control" id="Password2" placeholder="Confirm Password">
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
      $('#quickForm4').validate({
        rules: {
          old_password: {
            required: true,
          },
          new_password: {
            required: true,
            minlength: 6
          },
          password2: {
            required: true,
            equalTo: '#Password'
          },
        },
        messages: {
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          password2: {
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