<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    
     public function index()
    {
        $task = Task::all();
        return view('tasks.index', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       $request->validate([
        'title' =>'required'
       ]);
      
         task::create([
            'title' => $request->title
         ]);

         return back();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $task = Task::find($task->id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $task = Task::find($task->id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task = Task::find($task->id);
        $task->update([
            'title'=> $request->title
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task = Task::find($task->id);
        $task->delete();
        return redirect('/');
    }
}
