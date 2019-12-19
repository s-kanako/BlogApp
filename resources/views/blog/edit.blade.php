@extends('includes.head')
@section('title','Edit Post')
@section('content')
<div class=Container>
    <div class="col-md-8 col-md-offset-4">
        <div class="well">
        <form action="{{route('posts.update',$posts->id)}}" method="post"><br><br>
                <div class="text-center"><h4>Edit a New Post</h4></div>
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title :</label>
                <input type="text" name="title" value="{{$posts->title}}" class="form-control" placeholder="Input title..">
                </div>
                <div class="form-group">
                        <label for="content">Content :</label>
                <textarea type="" rows="10" name="content" class="form-control" placeholder="Input Content..">{{$posts->content}}</textarea>
                    </div>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
            <br><br><br>
        </div>
    </div>
</div>
@endsection