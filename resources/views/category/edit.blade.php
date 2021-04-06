@extends('layouts.site')
@section('content')
    <form action="/category_update/{{$category->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">:عنوان</label>
            <input value="{{$category->title}}" name='title' type="text" class="form-control" id="title"  >
        </div>

        <input type = "submit" name = "submit" value = "update" class="btn btn-warning" placeholder=/>
    </form>

@endsection
