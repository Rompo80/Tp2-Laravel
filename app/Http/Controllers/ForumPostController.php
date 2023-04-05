<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ForumPostController extends Controller
{



        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
           $posts = ForumPost::viewPosts();
           return view('forum.post.index', ['posts' => $posts]);
        }




        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        { 
          $categories = Category::selectCategory();
          return view('forum.post.create', ['categories' => $categories]);
        }




        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
                $request->validate(
                [
                  'title' => 'required',
                  'body' => 'required',
                  'category_id' => 'required|exists:categories,id',
                ]
                );

                $forumPost = new ForumPost;
                $forumPost->fill($request->all());
                $forumPost->user_id = Auth::User()->id;
                $forumPost->save();

                return redirect(route('etudiants.show', $forumPost->user_id));
        }
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\forumPost  $forumPost
         * @return \Illuminate\Http\Response
         */
        public function show($id)

        {
                $post = ForumPost::findOrFail($id);
                return view('forum.post.show', compact('post'));
        }


        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\ForumPost  $forumPost
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
                $categories = Category::selectCategory();
                $forumPost = ForumPost::findOrFail($id);

                if ($forumPost->user_id != Auth::id()) {
                        return view('auth.login');
                }
                return view('forum.post.edit', ['forumPost' => $forumPost, 'categories' => $categories]);
        }



        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\forumPost  $forumPost
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
                $request->validate(
                        [
                                'title' => 'required',
                                'body' => 'required',
                                'category_id' => 'required|exists:categories,id',
                        ]
                );
                
                $forumPost = ForumPost::findOrFail($id);
                if ($forumPost->user_id != Auth::id()) {
                        return view('auth.login');
                }
                $forumPost->update([
                        'title' => $request->title,
                        'body' => $request->body,
                        'title_fr' => $request->title,
                        'body_fr' => $request->body,
                        'category_id' => $request->category_id
                        
                ]);

                return redirect(route('post.show', $forumPost->id))->withSuccess('Article mis a jour avec success');
        }




        public function deletePost($id, $user_id)
        {
                $post = ForumPost::where('id', $id)->where('user_id', $user_id)->firstOrFail();
                if ($user_id != Auth::id()) {
                        return view('auth.login');
                }
                $post->delete();
                return redirect(route('etudiants.show', $user_id));
        }

}




// dd($request->all()); // Debugging statement
// dd($forumPost); // Debugging statement
// dd($forumPost->id); // Debugging statement