<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feature_courses;
use App\Models\free_courses;





class UserController extends Controller
{
    public function user_dashboard_page()
    {

        return view('userpanel.user_dashboard_page');

    }
  

    public function teacher_detail_page_userpanel()
    {

        return view('userpanel.teacher_detail_page_userpanel');

    }

    // public function user_penal_courses_page()
    // {

    //     return view('userpanel.user_penal_courses_page');

    // }

    public function user_penal_courses_page()
    {
        $feature_courses=feature_courses::all();
        $free_courses=free_courses::all();
 
    

        return view('userpanel.user_penal_courses_page',compact('feature_courses','free_courses'));
    }


    
    public function userpenal_course_explore_about_page()
    {

        return view('userpanel.userpenal_course_explore_about_page');

    }
    
    public function explore_course_page_assingment_page()
    {

        return view('userpanel.explore_course_page_assingment_page');

    }
    
    public function explore_courses_review_page_userpanel()
    {

        return view('userpanel.explore_courses_review_page_userpanel');

    }
    
    public function confirm_enroll_userpanel_page()
    {

        return view('userpanel.confirm_enroll_userpanel_page');

    }
    
    public function user_penal_payment_method_page()
    {

        return view('userpanel.user_penal_payment_method_page');

    }
    

    public function user_penal_review_your_order_page()
    {

        return view('userpanel.user_penal_review_your_order_page');

    }
    
    public function enroll_course_page_userpanel()
    {

        return view('userpanel.enroll_course_page_userpanel');

    }
   
    public function favorties_page_userpenal()
    {

        return view('userpanel.favorties_page_userpenal');

    }
    
    public function user_profile_page()
    {

        return view('userpanel.user_profile_page');

    }

}
