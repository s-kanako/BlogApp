@extends('includes.head')
@section('title', 'Welcome')
@section('content')
 <div class="header_wrap">
  <div class="info">
     <div class="container">
         <div class="row">
            <div class="col-md-7">
                 <div class="header_info">
                    <div class="descrip">
                        <a href="#">
                        <h1 style="color:#ece705; font-weight: bold;     margin-top: 0;">WELCOME TO OUR BLOGS</h1>
                          </a>
                         <p>
                           CREATE YOUR OWN BLOG IN OUR APPLICATION,A reverse blog is composed by its users rather than a single blogger. This system has the characteristics of a blog, and the writing of several authors.
                           </p><br>
                           <div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
        <section class="wp-separator">
            <article class="section">
                <div class="container">
                    <div class="row text-center">
                        <p class="h1">ACTIVITIES & EVENTS</p>
                        <p class="lead">Many blogs provide commentary on a particular subject or topic, ranging from
                          politics to sports. Others function as more personal online diaries, and others function more
                           as online brand advertising of a particular individual or company. A typical blog combines text,
                            digital images, and links to other blogs, web pages, and other media related to its topic. 
                    </div>
                </div>
            </article>
        </section>
<div class="container-fluid">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                <div class="well well-sm wl">
                    <div class="btn-group">
                        <a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-th-list">
                        </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="fa fa-th"></span> Grid</a>
                    </div>
                </div>
      <div id="grid_post" class="row list-group">
 @foreach($posts as $post)
         <div class="item  col-xs-8 col-lg-8">
            <div class="thumbnail as">
              <br>
              <a href=""><img src="images/assorted-cololr-lipsticks-1377034.jpg" style="width:500px; height:300px;"></a>
            </div>
                <div class="caption">
                    <div class="c_hr">
                    <h4 class="group inner list-group-item-heading"><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h4>
                    <small>{{date('j F Y,h:ia',strtotime($post->created_at))}}</small> | by <a href="#">Admin</a>
                     </div>
                    <p class="group inner list-group-item-text">{{($post->content)}}</p>
                    <div class="row"></div>
                </div>
            </div>
        </div><br>
        <br>
        <br>
 @endforeach
 <hr>
  </div><!-- end grid -->
</div>
    </div><!-- end row -->
</div>
        </section>
        <!-- FOOTER -->
         <div class="text-center">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
         </div>
        <!-- END FOOTER -->
</div><!-- end con fluid -->
@endsection
                        