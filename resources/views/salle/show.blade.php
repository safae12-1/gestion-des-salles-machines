@extends('adminlte::page')

@section('title')
show rooms

@endsection
@section('content_header')
    <h1>show rooms</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>{{$salle->libelle}}</h4>
                </div>
            </div>
            <div class="card-body">
                
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" disabled class="form-control rounded-0" name="id" placeholder="id"
                        value="{{$salle->id}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "code" >code</label>
                        <input type="text"disabled class="form-control rounded-0" name="code" placeholder="code"
                        value="{{$salle->code}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "libelle" >libelle</label>
                        <input type="text" disabled class="form-control rounded-0" name="libelle" placeholder="libelle"
                        value="{{$salle->libelle}}">

                    </div>
                    
             </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
@endsection