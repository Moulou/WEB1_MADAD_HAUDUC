<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retourne tout les posts

        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all()->lists('name', 'id');

        return view('posts.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidatePostRequest $request)
    {
        //
        $post = new Post;

        $post->user_id  = Auth::user()->id;
        $post->titre    = $request->titre;
        $post->contenu  = $request->contenu;

        $post->save();

        return redirect()
            ->route('posts.show', $post->id)
            ->with(compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Affiche le post voulu

        try{

            $post = Post::findOrFail($id);
            $commentaires = Commentaire::orderBy('created_at', 'DESC')->get();
            return view('posts.show')->with(compact('post', 'commentaires'));

        }catch(\Exception $e){
            return redirect()->route('posts.index')->with(['erreur' => 'Article introuvable']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(Auth::user()->id == $post->user_id) {
            $users = User::all()->lists('name', 'id');

            return view('posts.edit')->with(compact('post', 'users'));
        } else {
            return redirect()->route('posts.index')->with(['erreur' => 'Vous ne pouvez pas modifier un article qui n\'est pas le votre']);
        }


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
        //
        $post = Post::find($id);

        $post->titre   = $request->titre;
        $post->contenu = $request->contenu;


        $post->update();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();


        return redirect()->route('posts.index');
    }
}
