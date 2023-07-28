<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Alert;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::latest()->paginate(15);
    
        return view('admin.posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function lista_dicas()
    {
        $posts = Posts::where('category_id','=','1')->paginate(5);
        $last_posts = $posts->last();
    
        return view('site.blog',compact('posts','last_posts'));
    }
    public function lista_atividades()
    {
        $posts = Posts::where('category_id','=','2')->paginate(5);
        $last_posts = $posts->last();
    
        return view('site.blog',compact('posts','last_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::get();
        return view('admin.posts.create', compact('categories'));
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
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postsImage);
            $input['image'] = "$postsImage";
        }
    
        Posts::create($input);
     
        Alert::success('Post criado com Sucesso', '');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post,Request $request)
    {
        $post= $post->where('id',$request->id)->first();
        $posts = Posts::first()->paginate(4);
        return view('site.blog_single',compact('post','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        $categories = PostCategory::get();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postsImage);
            $input['image'] = "$postsImage";
        }else{
            unset($input['image']);
        }
          
        $posts->update($input);
    
        return redirect()->route('posts.index')
                        ->with('success','Post atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        $posts->delete();
        Alert::success('Eliminado com Sucesso', '');
        return redirect()->back();
    }
}
