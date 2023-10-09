<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\cart;

use App\Models\feature_courses;

use App\Models\free_courses;

use App\Models\news;

use Hash;

use Session;





class HomeController extends Controller
{

       // function for homepage and fetch feature courses
    public function index()
    {
        
   
        $feature_courses=feature_courses::all();
            $free_courses=free_courses::all();
            $news=news::all();
        return view('home.homepage',compact('feature_courses','free_courses','news'));
    }


        // function for courses
        public function courses()
        {
            $feature_courses=feature_courses::all();
            $free_courses=free_courses::all();
            $news=news::all();

            return view('home.courses',compact('feature_courses','free_courses','news'));
        }


        // function for course_overview_page
        public function course_overview_page($id)
        {
            $feature_courses=feature_courses::find($id);
            return view('home.course_overview_page',compact('feature_courses'));
        }

  
     
             
            // function for freeCourses
            public function  freeCourses($id)
            {
                $free_courses=free_courses::find($id);
                return view('home.free-courses-page',compact('free_courses'));
            }

           
            
         // function for about-sabiha-page
         public function about_sabiha_page()
         {
            $news=news::all();

             return view('home.about_sabiha_page',compact('news'));
         }
     
            
            // function for about_sabiha_page
            public function  news_detail($id)
            {
                $news=news::find($id);
                return view('home.news_detail',compact('news'));
            }
            
        // function for about-sabiha-page
        public function FAQ_page()
        {
            return view('home.FAQ_page');
        }
    


      
        // function for about-sabiha-page
        // public function about_sabiha_page()
        // {
        //     return view('home.about_sabiha_page');
        // }

        // function for contact_us_page
        public function contact_us_page()
        {
            return view('home.contact_us_page');
        }


           // function for abut_sabiha_abdulkader_detail_page
           public function abut_sabiha_abdulkader_detail_page()
           {
               return view('home.abut_sabiha_abdulkader_detail_page');
           }
   
           // function for course-detailreview
           public function course_detail_review_page($id)
           {
               return view('home.course_detail_review_page');
           }

            // function for payment-method-page
            public function payment_method_page()
            {
                return view('home.payment_method_page');
            }
 
             // function for payment-method-page
             public function checkoutpage()
             {
                 return view('home.checkoutpage');
             }
  
              // function for review_your_order_page
              public function review_your_order_page()
              {
                  return view('home.review_your_order_page');
              }
              public function userdashboard()
              {
                  return view('home.userdashboard');
              }
          
   




           public function add_cart($id){
            $feature_courses = feature_courses::findOrFail($id);
            $cart = session()->get('cart', []);
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            }  else {
                $cart[$id] = [
                    "course_title" => $feature_courses->course_title,
                    "course_image" => $feature_courses->course_image,
                    "price" => $feature_courses->price,
                    "quantity" => 1
                ];
            }
            session()->put('cart', $cart);
               return redirect()->back()->with('success', 'Course add to cart successfully!');

           }
           
           public function show_cart()
           {
               return view('home.show_cart');
           }
     

                // function to remove  cart  
                public function remove_cart(Request $request)
                {
                    if($request->id) {
                        $cart = session()->get('cart');
                        if(isset($cart[$request->id])) {
                            unset($cart[$request->id]);
                            session()->put('cart', $cart);
                        }
                        session()->flash('success', 'Product successfully removed!');
                    }
                }


    // public function redirect()
    // {
    //     $usertype=Auth::user()->usertype;

    //     if($usertype=='1')
    //     {
    //         return view('admin.dashboard');
    //     }
    //     elseif ($usertype=='2') {
    //         return view('userpanel.userpanel');
        
    //     }else{
    //         return view('home.homepage');

    //     }
        
    // }


   
    
  
}
