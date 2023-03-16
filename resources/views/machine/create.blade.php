@extends('adminlte::page')

@section('title')
Add new machines

@endsection
@section('content_header')
    <h1>ajouter machine</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>ajouter machine</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('machine.store')}}" class="mt-3" method ="post">
                 @csrf 
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" class="form-control" name="id" placeholder="id"
                        value="{{old('id')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "reference" >reference</label>
                        <input type="text" class="form-control" name="reference" placeholder="reference"
                        value="{{old('reference')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "marque" >marque</label>
                        <input type="text" class="form-control" name="marque" placeholder="marque"
                        value="{{old('marque')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "dateAchat" >dateAchat</label>
                        <input type="date" class="form-control" name="dateAchat" placeholder="dateAchat"
                        value="{{old('dateAchat')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "prix" >prix</label>
                        <input type="text" class="form-control" name="prix" placeholder="prix"
                        value="{{old('prix')}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "salleid" >salleid</label>
                        <input type="text" class="form-control" name="salleid" placeholder="salleid"
                        value="{{old('salleid')}}">

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