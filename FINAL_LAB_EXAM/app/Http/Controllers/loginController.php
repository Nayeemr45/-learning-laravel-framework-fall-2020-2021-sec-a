<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
    	
    	//$req->session()->put('name', $req->username);
    	//$req->session()->put('password', $req->password);
		//$data = $req->session()->get('name');
		//$req->session()->has('name');
    	//$req->session()->forget('name');
		//$req->session()->flush();
		//$req->session()->flash('msg', 'invalid username/password');
		//$req->session()->flash('error', 'DB error');
		//$req->session()->keep('msg');
		//$req->session()->reflash();
		//$data =$req->session()->pull('name');

		$user = User::where('username', $req->username)
		->where('password', $req->password)
		->first();

			if($user == null){
				$req->session()->flash('msg', 'invalid username/password');
				return redirect('/login');

			}else{
				
				$req->session()->put('username', $req->username);
				$req->session()->put('type', $user->type);
				$req->session()->put('id', $user->id);
				if($user->type == 'admin'){
					return redirect()->route('home.index');
				}
				elseif($user->type == 'employee'){
					return redirect()->route('employee.index');
				}

			 }
    }
}
