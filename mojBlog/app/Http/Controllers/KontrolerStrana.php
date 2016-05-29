<?php



namespace App\Http\Controllers;

use App\Post;

class KontrolerStrana extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {

    	$ime = 'Miloš';
    	$prezime = 'Crnjanski';
    	$punoIme= $ime . " " . $prezime;
    	$imejl = "office@gmail.com";
    	$data = [];
    	$data['email'] = $imejl;
    	$data['ime'] = $punoIme;

    	return view('pages.about') -> withPodaci($data);
    	//return view('pages.about') -> with("imeKojeSeGadjaUView-u", $promenljivaIzKontrlera);
    }

    public function getContact() {
    	return view('pages.contact');
    }
}


?>