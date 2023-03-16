@extends('adminlte::page')

@section('title')
update rooms

@endsection
@section('content_header')
    <h1>modifier utilisateur</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>modifier utilisateur</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('user.update',$user->id)}}" class="mt-3" method ="post">
                 
                @csrf 
                @method('PUT')
                    <!-- <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" class="form-control" name="id" placeholder="id"
                        value="{{old('id',$user->id)}}">

                    </div> -->
                    <div class="form-group mb-3">
                        <label for= "name" >name</label>
                        <input type="text" class="form-control" name="name" placeholder="name"
                        value="{{old('name',$user->name)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "email" >email</label>
                        <input type="text" class="form-control" name="email" placeholder="email"
                        value="{{old('email',$user->email)}}">

                    </div>

                    <div class="form-group mb-3">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password" placeholder="password"
                            value="{{ $unhashed_password }}">
                            <!-- value="{{ old('password') ?? $unhashed_password }}"> -->
                    </div>


                    <div class="form-group mb-3">
                        <label for= "role" >role</label>
                        <input type="text" class="form-control" name="role" placeholder="role"
                        value="{{old('role',$user->role)}}">

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </form>
            </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
@endsection