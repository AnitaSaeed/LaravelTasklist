@extends('layouts.site')
@section('content')
    <form action="/store" method="post">
    @csrf
    <div class="form-group">
        <label for="title">:عنوان</label>
        <input name='title' type="text" class="form-control" id="title" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">توضيحات:</label>
        <textarea ows = "5" cols = "50" name = "description" class="form-control" id="formGroupExampleInput2" ></textarea>
    </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">دسته بندي</label>
            <select class="form-control" name="category_id">
                <option>-</option>
                @foreach(\App\Category::get() as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </select>
        </div>
    <input type = "submit" name = "submit" value = "Submit" class="btn btn-warning" />
</form>
@endsection



