<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
class homeController extends Controller
{


    function index(Request $req){
    	/*$data = ['id'=> 123, 'name'=> 'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '1234')
    			->with('name', 'xyz');*/

    	/*return view('home.index')
    			->withId('1234')
    			->withName('xyz');*/

/*    	$v = view('home.index');
    	$v->withId('123');
    	$v->withName('alamin');
   		return $v;*/

        if($req->session()->has('username')){
            $name = $req->session()->get('username');
            return view('home.index', compact('name'));
        }else{
            $req->session()->flash('msg', 'invalid request...');
            return redirect('/login');
        }
    	
    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $req){
        $user = new User();
        $user->employee_name    = $req->employee_name;
        $user->username         = $req->username;
        $user->password         = $req->password;
        $user->contact_no       = $req->contact_no;

        if($user->save()){
        return redirect('/userlist');
        }
    }

    public function userlist(){
        $users  = User::where('type', 'employee')
        ->get();
        return view('home.userlist')->with('users', $users);
    }

    public function show($id){
       
    }

    public function edit($id){
        //$user = $id;
        $users  = User::where('id' , $id)
        ->where('type', 'employee')
        ->first();
        return view('home.edit')->with('employee_name' , $users->employee_name)
        ->with('username' , $users->username)
        ->with('password' , $users->password)
        ->with('contact_no' , $users->contact_no);
    }

    public function update($id , Request $req){
        //$user = new User();
        $user  = User::where('id' , $id);

        $user->employee_name    = $req->employee_name;
        $user->username         = $req->username;
        $user->password         = $req->password;
        $user->contact_no       = $req->contact_no;
        $user->update();
        return redirect('/userlist');
        
    }

    public function delete($id){
       //$user = $id;
       $users  = User::where('id' , $id)
       ->where('type', 'employee')
       ->first();
       return view('home.delete')->with('employee_name' , $users->employee_name)
       ->with('username' , $users->username)
       ->with('password' , $users->password)
       ->with('contact_no' , $users->contact_no);
    }

    public function destroy($id){
        $users  = User::destroy('id' , $id);

        $users  = User::where('type', 'employee')
        ->get();
       return view('home.userlist')->with('users', $users);
    }

    private function getUserlist(){
        return [
            ['id'=> 1, 'name'=>'xyz', 'email'=>'xyz@aiub.edu', 'cgpa'=>4],
            ['id'=> 2, 'name'=>'abc', 'email'=>'abc@aiub.edu', 'cgpa'=>3],
            ['id'=> 3, 'name'=>'asd', 'email'=>'asd@aiub.edu', 'cgpa'=>3.5],
            ['id'=> 4, 'name'=>'pqr', 'email'=>'pqr@aiub.edu', 'cgpa'=>2.4],
            ['id'=> 5, 'name'=>'alamin', 'email'=>'alamin@aiub.edu', 'cgpa'=>1.2]
        ];
    }
}
