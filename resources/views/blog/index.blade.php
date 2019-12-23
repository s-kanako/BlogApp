@extends('includes.head')
@section('title',' Post Index')
@section('content')
<div class="container" style="margin-bottom:120px;">
    <div class="row">
        <div class="col-md-9">
            @foreach($posts as $post)
           <div class="post-item">
            <div class="post-inner">
                <div class="post-head clearfix">
                    <div class="col-md-4">
                    <a href=""><img src="{{asset('images/'.$post->image)}}" style="width:100%;height:auto;"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="detail">
                        <h3 class="handle"><a href="posts/{{$post->slug}}">{{$post->title}}</a></h3>
                        </div>
                        <div class="post-meta"></div>
                    <span>{{date('j F Y',strtotime($post->created_at))}}</span>|
                    <span>by</span>
                    <span><a href="">Admin</a></span>
                    </div>
                </div>
                <br>
                <span class="share">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-reddit"></i>
                    <i class="fa fa-youtube"></i>
                </span>
                @foreach($post->tags as $tag)
                <button type="button" class="btn btn-success ">{{$tag->name}} </button>
                @endforeach
                <div class="content" style="margin-top:12px;">
                    {!!($post->content)!!}
                </div>
            </div>
           </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
