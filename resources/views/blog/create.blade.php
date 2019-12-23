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
                    <label for="category_id">category:</label>
                    <select name="category_id" class="form-control">
                        <option value="" class="disabled selected"> select category</option>
                        @foreach($categories as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                    </div>



                    <div class="form-group">
                            <label for="tags"> Select Tag:</label>
                            <select name="tags" class="form-control">

                                @foreach($tags as $tag)

                            @endforeach

                            </div>


                    <div class="form-group">
                            <label for="tags">Tag:</label>
                            <select name="tags"  class="form-control ">
                                    <option value="" class="disabled selected"> select tag</option>

                                @foreach($tags as $tag)

                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                            </select>
                            </div>


                 <div class="form-group">
                     <label for="image">select image</label>
                     <input type="file" name="image" class="form-control">
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