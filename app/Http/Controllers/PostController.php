<?php
    namespace App\Http\Controllers;


    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use App\Post;
    use App\Tag;
    use App\Category;

    class PostController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts=Post::latest()->paginate(5);
            return view('blog.index',compact('posts'))->with('i',(request()->input('page',1)-1)*5);
        }
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $tags=Tag::all();
            $categories=Category::all();
            return view('blog.create')->withCategories($categories)->withTags($tags);
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $request->validate([
                'title'=>'required|min:5',
                'content'=>'required',
                'tags'=>'required',
                'category_id'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $posts=new Post;
            $posts->title=$request->title;
            $posts->slug=preg_replace('/\s+/','-',$posts->title);
            $posts->content=$request->content;
            $posts->category_id=$request->category_id;
            if($request->hasFile('image')){
                $file=$request->file('image');
                $fileName=time().'.'.$file->getClientOriginalExtension();
                $destinationPath=public_path('/images');
                $file->move($destinationPath,$fileName);
                $posts->image=$fileName;
            }
            $posts->save();
            $posts->tags()->sync($request->tags);
            return back()->withinfo('Post has been created successfully');
        }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($slug)
        {
            $posts=Post::where('slug','=',$slug)->first();
            return view('blog.show')->withPosts($posts);
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $posts=Post::find($id);
            return view('blog.edit')->withPosts($posts);
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $request->validate([
                'title'=>'required|min:5',
                'content'=>'required',
            ]);
            $posts=Post::find($id);
            $posts->title=$request->title;
            $posts->content=$request->content;
            $posts->save();
            return back()->withInfo('Post Updated Successfully');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($slug)
        {
            $posts=Post::find($id);
            $posts->delete();
            return back()->withInfo('Post deleted successfully');
    }
    }