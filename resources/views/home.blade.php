@extends('adminlte::page')

@section('title')
    application de gestion

@endsection
@section('content_header')
    <h1>dashboard</h1>

@endsection
@section('content')
<div class="container ">
    <div class="row my-5">
        <div class="col-md-4 ">
            <div class="small-box bg-info ">
                <div class="inner">
                <h3>{{\App\Models\salle::count()}}</h3>
                <p>Salles</p>
                <div class="icon">
                    <i class="fas fa-door-open"></i>
                </div>
                <a href="{{url('admin/salle')}}" class ="small-box-footer">
                    More info <i class ="fas fa-info-circle"></i>
                </a>
                </div>

               




                </div>         
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row my-5">
        <div class="col-md-4 ">
            <div class="small-box bg-info ">
                <div class="inner">
                <h3>{{\App\Models\machine::count()}}</h3>
                <p>machines</p>
                <div class="icon">
                    <i class="fas fa-desktop"></i>
                </div>
                <a href="{{url('admin/machine')}}" class ="small-box-footer">
                    More info <i class ="fas fa-info-circle"></i>
                </a>
                </div>
                

                
        

                </div>         
            </div>
        </div>
    </div>
</div>
@endsection