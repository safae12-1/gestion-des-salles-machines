@extends('adminlte::page')

@section('title')
show users

@endsection
@section('content_header')
    <h1>show users</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>{{$user->name}}</h4>
                </div>
            </div>
            <div class="card-body">
                
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" disabled class="form-control rounded-0" name="id" placeholder="id"
                        value="{{$user->id}}">

                    </div>
                    
                    <div class="form-group mb-3">
                        <label for= "name" >name</label>
                        <input type="text" disabled class="form-control rounded-0" name="name" placeholder="name"
                        value="{{$user->name}}">

                    </div>
                    
                    <div class="form-group mb-3">
                        <label for= "email" >email</label>
                        <input type="text"disabled class="form-control rounded-0" name="email" placeholder="email"
                        value="{{$user->email}}">

                    </div>
                   
                    
             </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
@endsection