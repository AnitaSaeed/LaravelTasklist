@extends('layouts.site')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>



        </tr>

        @foreach($categories as $category)
            <tr>
                <th scope="col">{{$category->id}}</th>
                <td scope="col">{{$category->title}}</td>
                <td>
                   <a href="category_edit/{{$category->id}}" class="btn btn-outline-primary">edit</a>

                </td>
                <td>
                    <form action="category_delete/{{$category->id}}" method="post">
                        @csrf
                        <button onclick="return confirm('are you fucking sure?')" class="btn btn-outline-danger">delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </thead>
        <tbody>



        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            {{$categories->links()}}
        </div>

    </div>
@endsection

