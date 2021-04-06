@extends('layouts.site')
@section('content')
    <form action="/category_store" method="post">
        @csrf
        <div class="form-group">
            <label for="title">:عنوان</label>
            <input name='title' type="text" class="form-control" id="title" >
        </div>

        <input type = "submit" name = "submit" value = "Submit" class="btn btn-warning" />
    </form>
@endsection
