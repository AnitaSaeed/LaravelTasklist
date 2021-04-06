@extends('layouts.site')
@section('content')
    <form action="/update?id={{$task->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">:عنوان</label>
            <input value="{{$task->title}}" name='title' type="text" class="form-control" id="title"  >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">توضيحات:</label>
            <textarea ows = "5" cols = "50" name = "description" class="form-control" id="formGroupExampleInput2" >{{$task->description}}</textarea>
        </div>
        <input type = "submit" name = "submit" value = "Submit" class="btn btn-warning" placeholder=/>
    </form>

@endsection

