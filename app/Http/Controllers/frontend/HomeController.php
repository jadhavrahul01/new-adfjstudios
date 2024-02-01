<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\Pservices;
use App\Models\Stypes;
use App\Models\Testimonial;
use App\Models\Clientlele;
use App\Models\Offer;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $testimonials = Testimonial::all();
        $clientleles = Clientlele::all();
        $offers = Offer::all();
        return view('frontend.index' ,compact('posts','testimonials','clientleles','offers'));
    }
    // {
    //     $posts = Post::latest()->take(10)->get();
    //     $testimonials = Testimonial::all();
    //     $clientleles = Clientlele::all();
    //     $offers = Offer::all();
    //     return view('frontend.index' ,compact('posts','testimonials','clientleles','offers'));
    // }

    public function about()
    {
        return view('frontend.about');
    }

    public function audio()
    {
        return view('frontend.audio');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getstarted()
    {
        return view('frontend.get-started');
    }

    public function graphics()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.graphics')->with('posts', $posts)->with('stypes', $stypes);
    }

    public function music()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.music')->with('posts', $posts)->with('stypes', $stypes);
    }

    public function newsletter()
    {
        return view('frontend.newsletter');
    }

    public function pricing()
    {
        $offers = Offer::all();
        return view('frontend.pricing-plan')->with('offers', $offers);
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function service()
    {
        $posts = Post::all();
        return view('frontend.service')->with('posts', $posts);
    }

    public function subscription()
    {
        $posts = Post::all();
        $offers = Offer::all();
        return view('frontend.subscription',compact('posts','offers'));
    }


    public function terms()
    {
        return view('frontend.terms');
    }

    public function video()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.video')->with('posts', $posts)->with('stypes', $stypes);
    }
}
