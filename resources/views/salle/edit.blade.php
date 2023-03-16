@extends('adminlte::page')

@section('title')
update rooms

@endsection
@section('content_header')
    <h1>modifier salle</h1>

@endsection
@section('content')
<div class="container ">
@include('layouts.alert')
    <div class="row">
        
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>modifier salle</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('salle.update',$salle->id)}}" class="mt-3" method ="post">
                 
                @csrf 
                @method('PUT')
                    <div class="form-group mb-3">
                        <label for= "id" >id</label>
                        <input type="text" class="form-control" name="id" placeholder="id"
                        value="{{old('id',$salle->id)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "code" >code</label>
                        <input type="text" class="form-control" name="code" placeholder="code"
                        value="{{old('code',$salle->code)}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for= "libelle" >libelle</label>
                        <input type="text" class="form-control" name="libelle" placeholder="libelle"
                        value="{{old('libelle',$salle->libelle)}}">

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