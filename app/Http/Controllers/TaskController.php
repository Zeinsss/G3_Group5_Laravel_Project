<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Event;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_event = Task::with('event')->get();
        return view('tasks.index', ['tasks' => Task::all(), 'events' => $data_event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create', ['events' => Event::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:pending,completed',
            'due_date' => 'required|date',
            'event_id' => 'required|exists:events,id',
            'priority' => 'required|in:low,medium,high',
            'member' => 'required|string'
        ]);
        $newTask = Task::create($data);
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task, 'events' => Event::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:pending,completed',
            'due_date' => 'required|date',
            'event_id' => 'required|exists:events,id',
            'priority' => 'required|in:low,medium,high',
            'member' => 'required|string'
        ]);
        $task->update($data);
        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect(route('tasks.index'));  
    }
}
