<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            $id = 123;
            $name = $req->session()->get('username');
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...');
            return redirect('/login');
        }
    	
    }

    public function create(){
        //
        //return view('home.create');
    }

    public function store(){
        ///
        return redirect('/userlist');
    }

    public function userlist(){
        $users  = $this->getUserlist();
        return view('home.userlist')->with('users', $users);
    }

    public function show($id){
        $users  = $this->getUserlist();
        //$arr = $users[$id-1];
        //echo implode(" || ",$arr);
        echo "<h4>Details :-</h4>"."<br>";
        echo "<a href='/userlist'>Back</a>"."<br>"."<br>";

        echo "<strong>ID : </strong>".$users[$id-1]['id']."<br>";
        echo "<strong>Name : </strong>".$users[$id-1]['name']."<br>";
        echo "<strong>Email : </strong>".$users[$id-1]['email']."<br>";
        echo "<strong>CGPA : </strong>".$users[$id-1]['cgpa']."<br>";
        //return view('home.userlist')->with('users', $users);
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function edit($id){
        //$user = $id
        $users  = $this->getUserlist();
        return view('home.edit')->with('name', $users[$id-1]['name'])
                                ->with('email', $users[$id-1]['email'])
                                ->with('cgpa', $users[$id-1]['cgpa']);
    }

    public function update($id , Request $req){
        /* echo $req->name;
        echo $req->email;
        echo $req->cgpa."<br>"; */
        $users  = $this->getUserlist();
        //print_r($users);
        for($i=0; $i < count($users); $i++){
            if($users[$i]['id'] == $id){
                //echo $users[$i]['id']."<br>";
                $users[$i]['name']=$req->name;
                $users[$i]['email']=$req->email;
                $users[$i]['cgpa']=$req->cgpa;
            }
        }
        //print_r($users);
        //$updateusers = 
        return view('home.userlist')->with('users', $users);
        
    }

    public function delete($id){
        $users  = $this->getUserlist();
        //print_r($users[$id-1]);
        return view('home.delete')->with('name', $users[$id-1]['name'])
                                ->with('email', $users[$id-1]['email'])
                                ->with('cgpa', $users[$id-1]['cgpa']);
    }

    public function destroy($id){
        $users  = $this->getUserlist();
        //print_r($users);
        for($i=0; $i < count($users); $i++){
            if($users[$i]['id'] == $id){
                unset($users[$i]);  
                //print_r($users);
            }
            
        }
        //print_r($users);
        //$updateusers = 
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
