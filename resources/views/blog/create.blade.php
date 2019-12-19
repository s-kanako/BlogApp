@extends('includes.head')

@section('title','Create Post')

@section('content')

<br>

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                <div class="text-center"><h4>Create a New Post</h4></div>
               @csrf


                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="input title...">
                </div>



    
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea type="" rows="8" name="content" class="form-control" placeholder="input text..."></textarea>
                </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <br>

            </form>
            <br>
        </div>
    </div>

</div>
@endsection