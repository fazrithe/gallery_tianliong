<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Gallery_image;
use App\Models\Gallery_video;
use App\Models\Gallery_data;
use App\Models\Gallery_category;
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
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_image::orderBy('created_at','desc')->paginate(12);
            return view('gallery-image', compact('gallery','category'));

    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryImageId($id)
    {
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_image::where('category_id', $id)->orderBy('created_at','desc')->paginate(12);
            return view('gallery-image', compact('gallery','category'));

    }

         /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryVideo(Request $request)
    {
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_video::orderBy('created_at','desc')->paginate(12);
            return view('gallery-video', compact('gallery','category'));

    }

       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryVideoId($id)
    {
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_video::where('category_id',$id)->orderBy('created_at','desc')->paginate(12);
            return view('gallery-video', compact('gallery','category'));

    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryData(Request $request)
    {
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_data::orderBy('created_at','desc')->paginate(12);
            return view('gallery-data', compact('gallery','category'));

    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryDataId($id)
    {
            $category   = Gallery_category::where('type','image')->get();
            $gallery = Gallery_data::where('category_id',$id)->orderBy('created_at','desc')->paginate(12);
            return view('gallery-data', compact('gallery','category'));

    }
}
