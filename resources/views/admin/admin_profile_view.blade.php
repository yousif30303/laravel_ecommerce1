@extends('admin.admin_master')

@section('admin')

<div class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card"><br><br>
                    <center>
                        <img class="rounded-circle avatar-xl center" src="{{ asset('backend/img/img2.jpg') }}" height="200px" width="200px" alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name :  {{auth()->user()->name}}</h4>
                        <hr>
                        <h4 class="card-title">User Email :  {{auth()->user()->email}}</h4>
                        <hr>
                        <h4 class="card-title">User Name : {{auth()->user()->username}}</h4>
                        <hr>
                        <a href="" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                    </div>
                </div>
            </div> 
        </div>
        <div>
            
        </div>
    </div>
</div>    
@endsection