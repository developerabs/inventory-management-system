@extends('layouts.master')
@section('title','User Profile')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <h3>User Profile </h3>
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="img-fluid img-circle" 
                            style="border: 3px solid #adb5bd;
                            margin: 0 auto;
                            padding: 3px;
                            width: 100px;
                            height:104px"
                           src="{{ (!empty($user->image))?url('images/user/'.$user->image):url('images/user/profile.jpg') }}"
                           alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">{{ $user->name }}</h3>
    
                    <p class="text-muted text-center">{{ $user->address }}</p>
    
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Mobile No.</b> <a class="float-right">{{ $user->mobile }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Gender</b> <a class="float-right">{{ $user->gender }}</a>
                      </li>
                    </ul>
    
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                </div>
            </div>
            @if (session()->has('success'))
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "{{ session()->get('success') }}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            @endif
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- /.row (main row) -->
@endsection
@section('scripts')
    
<script>
  
</script>
@endsection