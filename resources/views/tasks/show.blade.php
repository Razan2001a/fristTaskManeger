@extends('layout.app')

@section('content')
  <div class="card">
    <div class="card-title text-center bg-dark">
  <h3 class="text-light p-1">
       اظهار المهمة
  </h3>
    </div>
    <div class="card-body">
         <h1>{{$task->title}}</h1> 
         
         
         <div class="d-flex flex-row">
            <a href="">
            <i class="fa-solid fa-pen"></i>
            </a>
               <form action="{{route('tasks.delete',$taski)}}" method="post">
                @csrf 

                @method('delete')
                <button type="submit" class="btn btn-link btn-sm float-end">
                  <i class="fas fa-trash text-danger"></i>
                </button>

               </form>
           </div>
    </div>
  </div>
@endsection