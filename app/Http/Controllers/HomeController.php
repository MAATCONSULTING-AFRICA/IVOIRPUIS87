<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::with(['comments.user', 'tags', 'likes', 'user'])->get();
        return view('home', ['posts'=> $posts]);
    }
    
    public function blog(){
        $pagetitle = 'Blog/Actualités';
        $posts = Post::with(['comments.user', 'tags', 'likes', 'user'])->orderBy('created_at', 'desc')->paginate(4);
        $categories = Category::orderBy('created_at', 'desc')->limit(4)->get();
        $recentsposts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $tags = Tag::orderBy('created_at', 'desc')->limit(6)->get();
        return view('blog', [
            'posts' => $posts,
            'categories' => $categories,
            'recentsposts' => $recentsposts,
            'tags' => $tags, 
            'pagetitle' => $pagetitle,
        ]);
    }
    public function contact(){
        $pagetitle = 'Contact';
        return view('contact' ,[
            'pagetitle' => $pagetitle,
        ]);
    }
    public function portefeuille(){
        $portfolios = Portfolio::paginate(6);
        $pagetitle = 'Portefeuille projets ';
        return view('portefeuille', [
            'portfolios' => $portfolios,
            'pagetitle' => $pagetitle,
        ]);
    }

    public function serviceDetail($id){
        $service = getServiceById($id);
        $services = Service::get();
        $pagetitle = 'Détail ' .$service->name;
        return view('service_detail',[
            'service' => $service,
            'allservices' => $services,
            'pagetitle' => $pagetitle,
        ]);
    }
    public function blogDetail($id){
        
        $post = Post::findOrFail($id);
        $categories = Category::orderBy('created_at', 'desc')->limit(4)->get();
        $recentsposts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $tags = Tag::orderBy('created_at', 'desc')->limit(6)->get();
        $pagetitle = 'Détail ' .$post->title;
        return view('blog_detail', [
            'post' => $post,
            'categories' => $categories,
            'recentsposts' => $recentsposts,
            'tags' => $tags,
            'pagetitle' => $pagetitle,
        ]);
    }
    public function portfolioDetail($id){
        $portfolio = Portfolio::findOrFail($id);
        $pagetitle = 'Détail ' .$portfolio->title;
        $projets = Portfolio::orderBy('created_at', 'desc')->limit(3)->get();
        return view('portefeuille_detail', [
            'portfolio' => $portfolio,
            'projets' => $projets,
            'pagetitle' => $pagetitle,
        ]);
    }

    public function demandeDevis(){
        $pagetitle = 'Demande de dévis ';
        return view('demande_devis', [
            'pagetitle' => $pagetitle,
        ]);
    }
}
