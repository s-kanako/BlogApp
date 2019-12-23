@extends('includes.head')

@section('title','$posts->title')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="post-item">
                    <div class="post-inner">
                        <div class="post-head clearfix">
                            <div class="col-md-12">
                                <div class="detail">
                                <h2 class="handle">{{$posts->title}}</h2>
                                <div class="post-meta">
                                    <div class="asker-meta">
                                    <span>{{date('j F Y',strtotime($posts->created_at))}}</span>
                                    <span>by</span>
                                    <span><a href="#">Admin</a></span>
                                    </div>
                                    <div class="share">
                                        <label>Share</label>
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-reddit"></i>
                                    </div>
                                    <div class="tags">
                                        @foreach($posts->tags as $tag)
                                        <button type="button" class="btn btn-primary">#{{$tag->name}} </button>
                                        @endforeach
                                    </div>
                                    <div class="category">
                                        <button type="button" class="btn btn-info pull-right ">{{$posts->category->name}} </button>
<br><br>
                                    </div>
                                    <hr>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="avatar_show"><a href="#"><img src="{{asset('images/'.$posts->image)}}"></a></div>
                                <br>
                                <div class="post-content">
                                    <p>{{$posts->content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>



        </div>
    </div>
  <center>
    <div class="col-md-3 align:center">
            <div class="editdelete">
           <a href="{{route('posts.edit',$posts->id)}}" class="btn btn-block btn-success">Edit</a>
                <br>
            <form action="{{route('posts.destroy',$posts->id)}}" method="post" role="form">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
</center>

@endsection
