<?php

namespace App\Http\Controllers;

use Hash;

use Session;

use App\Models\User;

use App\Models\feature_courses;

use App\Models\free_courses;

use Illuminate\Http\Request;

class AdminController extends Controller

{
    
      // function for payment-method-page
      public function dashboard()
      {
          $users = User::count();
          $feature_courses = feature_courses::count();
          $free_courses = free_courses::count();
          return view('admin.dashboard',compact('users','feature_courses','free_courses'));

      }


      public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
        public function admin_course()
        {
          $users = User::count();
          $feature_courses = feature_courses::count();
          $free_courses = free_courses::count();
            return view('admin.admin_course',compact('users','feature_courses','free_courses'));

        }
        public function admin_finance()
        {
    
            return view('admin.admin_finance');

        }

        
        
        public function admin_dashboard_account_page()
        {
    
            return view('admin.admin_dashboard_account_page');

        }


        public function admin_dashboard_setting()
        {
    
            return view('admin.admin_dashboard_setting');

        }
        public function admin_dashboard_setting_password_page()
        {
    
            return view('admin.admin_dashboard_setting_password_page');

        }
        public function admin_dashboard_setting_notification_page()
        {
    
            return view('admin.admin_dashboard_setting_notification_page');

        }
        
        public function aadmin_dashboard_notification_page()
        {
    
            return view('admin.aadmin_dashboard_notification_page');

        }

        public function admin_dashboard_course_payout_page()
        {
    
            return view('admin.admin_dashboard_course_payout_page');

        }

        public function admin_dashboard_upload_course()
        {
    
            return view('admin.admin_dashboard_upload_course');

        }
 
        
        public function admin_course_detail_all_student_page()
        {
    
            return view('admin.admin_course_detail_all_student_page');

        }
       
}
