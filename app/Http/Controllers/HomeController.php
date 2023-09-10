<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Gallery_image;
use App\Models\Gallery_video;
use App\Models\Gallery_data;
use App\Models\Sales_stock;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

            $product = Product::orderBy('created_at','desc')->paginate(12);
            return view('home', compact('product'));

    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryImage(Request $request)
    {

            $gallery = Gallery_image::orderBy('created_at','desc')->paginate(12);
            return view('gallery-image', compact('gallery'));

    }

         /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryVideo(Request $request)
    {

            $gallery = Gallery_video::orderBy('created_at','desc')->paginate(12);
            return view('gallery-video', compact('gallery'));

    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryData(Request $request)
    {

            $gallery = Gallery_data::orderBy('created_at','desc')->paginate(12);
            return view('gallery-data', compact('gallery'));

    }
}
