@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>Body</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($contents as $content)
            <tr>
                <td>{{$content->id}}</td>
                <td>{{$content->title}}</td>
                <td>{{$content->body}}</td>
                <td><a href="{{action('ContentController@edit',$content->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{action('ContentController@destroy', $content->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection