<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $foods = Food::all();
        $chefs = FoodChef::all();
        return view('home.home',compact('foods','chefs'));

    }
    public function redirects(){
        $name = auth()->user()->name;
        if(auth()->user()->usertype ==1){

            // return $name ;
            
            return view('admin.home',compact('name'));
        }else {

            return view('home.home');
        }
    }
    public function addCart(Request $request,$id){
        if(Auth::id()){
            $cart = new Cart();

            $userId = Auth::id();
            $foodId = $id  ; 

            // add data to data base 
            $cart->user_id = $userId;
            $cart->food_id = $foodId;
            $cart->quantity = $request->quantity;

            $cart->save();
            
            return redirect()->back();
        }else{
            return redirect('login');
        }

    }
    public function showCart(){

        if(Auth::id()){
            $id = Auth::user()->id;

            // improtant 
            $data = Cart::select('*') ->where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

            $data2 = Cart::where('user_id',$id)->get();


            return view('home.cart',compact('data','data2'));



        }else{
            return redirect('login');
        }
    }

    public function deleteCart($id){
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }

    public function orderConfirm(Request $request){
       
        foreach($request->foodname as $key=>$foodname){
            $data = new Order();
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name ;
            $data->phone = $request->phone ; 
            $data->address = $request->address;
            $data->save();

        }
        $userId= Auth::user()->id;

        $data = Cart::where('user_id',$userId)->delete();
        return redirect()->back();
    }
}
