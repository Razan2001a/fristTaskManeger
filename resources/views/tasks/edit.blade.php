@extends('layout.app')

@section('content')
  <div class="card">
    <div class="card-title text-center bg-dark">
  <h3 class="text-light p-1">
       عدل المهمة
  </h3>
    </div>
    <div class="card-body">
         
    <form action="{{route('tasks.update', $task)}}" method="post">
          @csrf
        <div class="input-group">
            <input type="text" value="{{$task->title}}"class="form-control" name="title" placeholder="اضف مهمة جديدة">
            <button type="submit" class="btn btn-dark btn-sm px-4">اضف</button>
        </div>
      
      
    </form>
        
       </div>
    </div>
  </div>
@endsection