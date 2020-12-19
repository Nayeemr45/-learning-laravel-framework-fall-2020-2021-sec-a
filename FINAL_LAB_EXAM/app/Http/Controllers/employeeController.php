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


    public function create(){
        return view('employee.create');
    }

    public function store(Request $req){
        $product = new Product();
        $product->product_name    = $req->product_name;
        $product->quantity         = $req->quantity;
        $product->price         = $req->price;

        if($product->save()){
        return redirect('/productlist');
        }
    }
    public function productlist(){
        $product  = Product::get();
        return view('employee.productlist')->with('product', $product);
    }

    public function edit($id){
        //$user = $id;
        $product  = Product::where('id' , $id)
        ->first();
        return view('employee.edit')->with('product_name' , $product->product_name)
        ->with('quantity' , $product->quantity)
        ->with('price' , $product->price);
    }

    public function update($id , Request $req){
        //$user = new User();
        $product  = Product::where('id' , $id);

        $user->product_name    = $req->product_name;
        $user->quantity         = $req->quantity;
        $user->price         = $req->price;
        $user->update();
        return redirect('/productlist');
        
    }

    public function delete($id){
        $product  = Product::where('id' , $id)
        ->first();
        return view('employee.delete')->with('product_name' , $product->product_name)
        ->with('quantity' , $product->quantity)
        ->with('price' , $product->price);
    }

    public function destroy($id){
        $product  = Product::destroy('id' , $id);

        $product  = Product::get();
        return view('employee.productlist')->with('product', $product);
    }

   

}
