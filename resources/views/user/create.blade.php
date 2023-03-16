@extends('adminlte::page')

@section('title')
Add new user

@endsection
@section('content_header')
    <h1>ajouter un utilisateur</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>ajouter un utilisateur</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" class="mt-3" method ="post">
                 @csrf 
                    
                    <div class="form-group mb-3">
                        <label for= "name" >name</label>
                        <input type="text" class="form-control" name="name" placeholder="name"
                        value="{{old('name')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "email" >email</label>
                        <input type="text" class="form-control" name="email" placeholder="email"
                        value="{{old('email')}}">

                    </div>

  
                    <div class="form-group mb-3">
                        <label for= "password" >password</label>
                        <input type="password" class="form-control" name="password" placeholder="password"
                        value="{{old('password')}}">

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">soumettre</button>
                    </div>
                </form>
            </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
@endsection