@extends('adminlte::page')

@section('title')
show machines

@endsection
@section('content_header')
    <h1>afficher machine</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>{{$machine->marque}}</h4>
                </div>
            </div>
            <div class="card-body">
                
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" disabled class="form-control rounded-0" name="id" placeholder="id"
                        value="{{$machine->id}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "reference" >reference</label>
                        <input type="text"disabled class="form-control rounded-0" name="reference" placeholder="reference"
                        value="{{$machine->reference}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "marque" >marque</label>
                        <input type="text" disabled class="form-control rounded-0" name="marque" placeholder="marque"
                        value="{{$machine->marque}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "dateAchat" >dateAchat</label>
                        <input type="date" disabled class="form-control rounded-0" name="dateAchat" placeholder="dateAchat"
                        value="{{$machine->dateAchat}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "prix" >prix</label>
                        <input type="text" disabled class="form-control rounded-0" name="prix" placeholder="prix"
                        value="{{$machine->prix}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "salleid" >salleid</label>
                        <input type="text" disabled class="form-control rounded-0" name="salleid" placeholder="salleid"
                        value="{{$machine->salleid}}">

                    </div>
                    
             </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
@endsection