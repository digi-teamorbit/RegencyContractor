<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\Category;
use App\Review;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $cms_home2 = DB::table('pages')->where('id', 2)->first();
        $cms_home3 = DB::table('pages')->where('id', 3)->first();
        $cms_home4 = DB::table('pages')->where('id', 4)->first();
        $cms_home5 = DB::table('pages')->where('id', 5)->first();
         $shop = DB::table('products')->limit(4)->get();
         


        return view('welcome', compact('banner', 'cms_home1','cms_home2','cms_home3','cms_home4','cms_home5','shop'));
    }
    

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        //$inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       // $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

    public function Reviewus(Request $request){
        
        $review = new review;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->message = $request->message;
        $review->rating = $request->rating;
        $review->product_id = $request->product_id;
        $review->save();
            
        Session::flash('message', 'Thank you for your Review. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();  
        
    }


    public function About(){
        $cms_home4 = DB::table('pages')->where('id', 4)->first();
        $cms_home5 = DB::table('pages')->where('id', 5)->first();

            return view('about',compact('cms_home4','cms_home5'));
    }

    public function ContactUs(){

            return view('contact');
    }

    public function Testimonial(){
        $testimonial = DB::table('testimonials')->get();

            return view('testimonial',compact('testimonial'));
    }


}
