<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller{

	public function addTask(Request $request){
		$task = new Task;
		$task->name = $request->input('task');
		$task->save();
		return redirect("/");
	}

	public function getAllTask(){

		$task=Task::all();
		return view('Task', ['Task' =>$task]);
		}
}
