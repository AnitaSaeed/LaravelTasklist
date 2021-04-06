@extends('layouts.site')
@section('content')

    <form action="/des1" method="post">
        @csrf
        <div class="form-group">
            <label for="title">:عنوان</label>
            <input name='title' type="text" class="form-control" id="title"  >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">توضيحات:</label>
            <textarea ows = "5" cols = "50" name = "description" class="form-control" id="formGroupExampleInput2" ></textarea>
        </div>
        <input type = "submit" name = "submit" value = "Submit" class="btn btn-warning" placeholder=/>
    </form>


@endsection
