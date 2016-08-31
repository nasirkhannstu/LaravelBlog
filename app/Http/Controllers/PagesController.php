<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {
	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first ="Nasir";
		$last = "Khan";
		$full = $first." ".$last;
		$email = "1nasir2khan3@gmail.com";
		$data = [];
		$data['email'] = "$email";
		$data['fullname'] = "$full";
		return view('pages.about')->withData($data);
		//return view('pages.about')->withFullname($full)->withEmail($email);
	}

	public function getContact(){
		return view('pages.contact');
	}
	public function postContact(Request $request){
		$this->validate($request, [
				'email' => 'required|email',
				'message' => 'required|min:3',
				'email' => 'required|min:10'
			]);

		$data = array(
				'email' => $request->email,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
				// 'survey' = ['q1' => "Hellow", 'q2' => 'Yes']
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success','Your Email has sent!');

		return view('pages.contact');

		return redirect()->url('/');
	}
}
?>

