<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){

        return view('insert');
    }
    public function store(){

        $title=request("title");
        $description= request("description");
        $task=new \App\Task();
        $task->title=$title;
        $task->description=$description;
        $task->category_id=request('category_id');
        $task->save();
        return redirect("tasks-list");

    }
    public function task_list(){
        $tasks = \App\Task::orderBy('created_at','desc');
        if(\request()->filled('query')){
            $tasks = \App\Task::where('title',"like","%".request('query')."%");
        }
        if(request()->filled('category_id')){
            $tasks = \App\Task::where('category_id',\request('category_id'));
        }
        $tasks= $tasks->paginate(5);
        return view('tasks-list', ['tasks'=>$tasks]);
    }
    public function edit(){
        $id=request('id');
        $task= \App\Task::where('id','=',$id)->get()->first();
        return view('edit',['task'=>$task]);
    }
    public function update(){
        $id=request('id');
        $title=request('title');
        $description=request('description');
        $task= \App\Task::where('id','=',$id)->get()->first();
        $task->title=$title;
        $task->description=$description;
        $task->save();
        return redirect("tasks-list");

    }
    public function delete(){
        $id=request('id');
        $task= \App\Task::where('id','=',$id)->get()->first();
        $task->delete();
        return redirect("tasks-list");
    }

}
