@extends('adminlte::page')

@section('title')
update machines

@endsection
@section('content_header')
    <h1>modifier machine</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>modifier machine</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('machine.update',$machine->id)}}" class="mt-3" method ="post">
                 
                @csrf 
                @method('PUT')
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" class="form-control" name="id" placeholder="id"
                        value="{{old('id',$machine->id)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "reference" >reference</label>
                        <input type="text" class="form-control" name="reference" placeholder="reference"
                        value="{{old('reference',$machine->reference)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "marque" >marque</label>
                        <input type="text" class="form-control" name="marque" placeholder="marque"
                        value="{{old('marque',$machine->marque)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "dateAchat" >dateAchat</label>
                        <input type="date" class="form-control" name="dateAchat" placeholder="dateAchat"
                        value="{{old('dateAchat',$machine->dateAchat)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "prix" >prix</label>
                        <input type="text" class="form-control" name="prix" placeholder="prix"
                        value="{{old('prix',$machine->prix)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "salleid" >salleid</label>
                        <input type="text" class="form-control" name="salleid" placeholder="salleid"
                        value="{{old('salleid',$machine->salleid)}}">

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