@extends('layout.app')

@section('content')

 <div class="card">
     <div class="card-title bg-dark">
        <h3 class="p-1 text-light">قائمة المهام</h3>
     </div>
   <div class="card-body">
      <form action="{{route('tasks.store')}}" method="post">
          @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="title" placeholder="اضف مهمة جديدة">
            <button type="submit" class="btn btn-dark btn-sm px-4">اضف</button>
        </div>
      
      
      </form>
      @if (!count($task))
      <p class="text-center my=3">لايوجد اي مهمات</p>
      @else
      <ul class="list-group list-group-flush mt-3">
        @foreach($task as $taski)
        <li class="list-group-item">
          <a href="{{route('tasks.show', $taski)}}" style="text-decoration: none">
            <h5>
               {{$taski->title}}
            </h5>
          </a>
           <div class="d-flex flex-row">
            <a href="{{route('tasks.edit', $taski)}}">
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
        </li>
        @endforeach
      </ul>
      @endif
   </div>
  </div>

@endsection