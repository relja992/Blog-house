<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;

class PostKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //pravljenje varijable i cuvanje svih postova u nju
        //$posts = Post::all();
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        //vracanje view-a sa promenljivom
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacija
        $this->validate($request, array('title'=>'required|max:255',
                                        'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                                        'bodi'=>'required'
                        ));
        //upisivanje u bazu
        $post = new Post;

        $post->naslov = $request->title;
        $post->slug = $request->slug;
        $post->tekst = $request->bodi;

        $post->save();

        Session::flash('success', 'Vest je uspešno sačuvana!');
        //ako želimo da čuvamo promenljivu trajno 
        //tj dok ne istekne vreme trajanja sesije - 120 min
        //Session::put('success', 'Vest je uspešno sačuvana!');

        //preusmeravanje na drugu stranu
        return redirect()->route('posts.show', $post->id);
        //alternativa - return view('pages.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find() - vraca ceo zapis po id-u
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
        //return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pronalazenje vesti iz baze i cuvenje u promenljivu
        $post = Post::find($id);
        //vracanje strane i lepljenje podataka u polja
        return view('posts.edit')->withPost($post);
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
        //Validacija podataka
        $post = Post::find($id);

        if($request->input('slug') == $post->slug){

            $this->validate($request, array('naslov'=>'required|max:255',
                                            'tekst'=>'required'
                        ));

        }else{
        
            $this->validate($request, array('naslov'=>'required|max:255',
                                            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                                            'tekst'=>'required'
                            ));
        }
        //Cuvanje podataka u bazu
        $post = Post::find($id);

        $post->naslov = $request->input('naslov');
        $post->slug = $request->input('slug');
        $post->tekst = $request->input('tekst');

        $post->save();
        //Poruka o uspesnom azuriranju
        Session::flash('success', 'Vest je uspešno ažurirana');
        //Redirekcija na drugu stranu sa updejtovanim podacima
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
        $post= Post::find($id);

        $post->delete();

        Session::flash('success', 'Vest je uspešno obrisana');

        return redirect()->route('posts.index');
    }
}
