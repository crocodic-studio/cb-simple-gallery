<?php 
namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use Hash;
	use CRUDBooster;

	class FrontendController extends Controller {
		// index
		public function getIndex(){
			$title =DB::table('cms_settings')->where('name','appname')->First();
			$data['title'] = $title->content;
			$data['active'] = 'index';
			$data['gallery'] = DB::table('gallery')->orderby('id','desc')->get();
			return view('index',$data);
		}
		// about
		public function getAbout(){
			$title =DB::table('cms_settings')->where('name','appname')->First();
			$data['title'] = $title->content;
			$data['active'] = 'about';
			$data['about_img'] = DB::table('cms_settings')->where('name','about_us')->first();
			$data['about_desc'] = DB::table('cms_settings')->where('name','description')->first();
			return view('about',$data);
		}
		// contact
		public function getContact(){
			$title =DB::table('cms_settings')->where('name','appname')->First();
			$data['title'] = $title->content;
			$data['active'] = 'contact';
			return view('contact',$data);
		}
		public function postContact(){
			$save['full_name'] = Request::get('first_name').' '.Request::get('last_name');
			$save['email'] = Request::get('email');
			$save['message'] = Request::get('message');
			DB::table('contact_us')->insert($save);

			Session::flash('message', "Message has been send");
			return redirect()->back();
		}
	}
?>