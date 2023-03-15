@extends('adminlte::page')

@section('title')
    la liste des salles

@endsection
@section('content_header')
    <h1>liste des salles</h1>

@endsection
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-10 mx-auto">
           <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>salles</h4>
                </div>
            </div>
            <dix class="card-body">
                <table id="mytable" class="table  table-boordred table-stripped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Code</th>
                            <th>Libelle</th>
                            <th></th>
                        </tr>
                    </thead>
                     
                    <tbody>
                       @foreach($salle as  $salle) 
                       <tr>
                            <th>{{$salle -> id}}</th>
                            <th>{{$salle -> code}}</th>
                            <th>{{$salle -> libelle}}</th>
                            <th></th>
                            <td class="d-flex justify-content-center align-items-center">
                                <a href="{{route('salle.show',$salle->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('salle.edit',$salle->id)}}" class="btn btn-sm btn-warning mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="{{$salle->id}}" action="{{route('salle.destroy',$salle->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf

                                </form>
                                <button type="submit"
                                onclick="deletesalle({{$salle->id}})" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trach"></i>
                                </button>
                            </td>
                       </tr>

                       @endforeach
                    </tbody>
                </table>
            </div>
           </div> 
            
                
        

                        
            
        </div>
    </div>
</div>
    
@endsection
@section('js')
<script>
    function deletesalle(id){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(id).submit()
            
  }
})
    }
</script>

        @if(session()->has('success'))
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "{{session()-> get('success')}}",
                        showConfirmButton: false,
                        timer: 2500
                    });


                </script>

        @endif

@endsection