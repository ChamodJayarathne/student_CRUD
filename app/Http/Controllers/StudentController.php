<?php

namespace App\Http\Controllers;

// use App\Facades\StudentFacade;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    protected $task;

    public function __construct()
    {
        $this->task = new Student();
    }

    public function student()
    {
        $response['tasks'] = $this->task->all();
        return view('pages\student\student')->with($response);
    }

    public function store(Request $request)
    {
        $this->task->create($request->all());

        // return redirect()->back();
        return redirect()->route('home');
        // $this->task->title = $request->title;
        // $this->task->save();

    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }

    // public function edit(Request $request)
    // {
    //     // $response['tasks'] = StudentFacade::get($request['task_id']);
    //     $response['tasks'] = $this->task->find($request['task_id']);
    //     return view('pages\student\edit')->with($response);
    // }

    // public function update($task_id)
    // {
    //     // $response['tasks'] = StudentFacade::get($request['task_id']);
    //     // $response['tasks'] = $this->task->find($request['task_id']);
    //     // $response['tasks'] = $this->task->find($task_id);
    //     // $response['tasks']->title = $request->title;
    //     // $response['tasks']->save();
    //     // return redirect()->back();

    //     $task = Student::find($task_id);
    //     return view('pages\student\edit')->with($task);
    // }
}
