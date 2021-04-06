@extends('layouts.site')
@section('content')
    <form action="" method="get">
        <div class="row" style="margin-bottom: 15px; margin-top: 15px;" >

            <div>
                <input name="query" class="form-control" value="{{request('query')}}">

            </div>
            <div class="col-md-3">
                <select name="category_id" class="form-control">
                    <option value="">-</option>
                    @foreach(\App\Category::get() as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div><button class="btn btn-primary">Filter</button></div>
        </div>

    </form>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">category</th>


    </tr>

    @foreach($tasks as $task)
    <tr>
        <th scope="col">{{$task->id}}</th>
        <td scope="col">{{$task->title}}</td>
        <td scope="col">{{$task->description}}</td>

        <td>{{\App\Category::find($task->category_id) ? \App\Category::find($task->category_id)->title: '---'}} </td>
        <td>
            <form  action="/delete?id={{$task->id}}" method="post" >
                @csrf

                <button class="btn btn-outline-danger">delete</button>


            </form>
        </td>
       <td> <a class="btn btn-outline-primary" href="/edit?id={{$task->id}}">edit</a></td>
    </tr>
    @endforeach
    </thead>
    <tbody>



    </tbody>
</table>
<div class="row">
    <div class="col-md-12">
        {{$tasks->links()}}
    </div>

</div>
@endsection

