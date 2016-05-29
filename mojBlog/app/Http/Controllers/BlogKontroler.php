<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogKontroler extends Controller
{
    public function getSingle($slug){

    	//dohvatanje vesti iz baze - parametar slug
    	$post = Post::where('slug', '=', $slug)->first();

    	//$post = Post::where('slug', '=', $slug)->get(); - kada uzimamo vise zapisa iz baze

    	//otvaranje view-a i dodavanje post objekta 
    	return view('blog.single')->withPost($post);
    }

    public function getIndex(){

    	$posts = Post::paginate(10);

    	return view('blog.index')->withPosts($posts);

    }
}
