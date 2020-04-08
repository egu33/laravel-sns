<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Validator;

class PostsController extends Controller
{
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::limit(10)
            ->orderBy('created_at', 'desc')
            ->get();
            
         // post/index.blade.php表示
        return view('post/index', ['posts' => $posts]);
    }
  public function new()
    {
         // テンプレート「post/new.blade.php」を表示します。
        return view('post/new');
    }
    
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all() , ['caption' => 'required|max:255', ]);

        //エラーの場合
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // Postモデル作成
        $post = new Post;
        $post->caption = $request->caption;
        $post->user_id = Auth::user()->id;

        $post->save();
        
        if($request->photo == null){
            return redirect('/');
        }
        
        $request->photo->storeAs('public/post_images', $post->id . '.jpg');
    
        
        return redirect('/');
    }
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/');
    }
}
