<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
class employeeController extends Controller
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
            return view('employee.index', compact('name'));
        }else{
            $req->session()->flash('msg', 'invalid request...');
            return redirect('/login');
        }
    	
    }
    public function productlist(){
        $product  = Product::get();
        return view('home.userlist')->with('users', $product);
    }
}
