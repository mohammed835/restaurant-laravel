<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  
    public function index(){
        $users = User::all();  
        return view('admin.user' ,compact('users'));
    }
    public function deleteUser($id){
        User::where('id',$id)->delete();
        return redirect()->back() ;

    }
    public function updateUser($id){

        $user = User::where('id',$id)->first();

        return view('admin.updateUser',compact('user'));
    }
    public function storeUser(Request $request,$id){
        User::where('id',$id)->update([
            'name' => $request->name,
            'email'=>$request->email,

        ]);

        return redirect('users');

    }
    public function foodMenu(){
       $foods =  Food::all();
        return view('admin.foodmenu',compact('foods'));
    }

    public function addFood(){
        return view('admin.addFood');
    }
    public function uploadFood(Request $request){
        $data = new Food();

        // save image in database
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect('foodMenu');
    }

    public function deleteFood($id){
        Food::where('id',$id)->delete();
        return redirect()->back();
    }

    public function updateFood($id){
        $food = Food::where('id',$id)->first();

        return view('admin.updateFood',compact('food')); 
    }
    public function UploadUpdateFood(Request $request,$id){

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

       $food = Food::where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$imagename

        ]);
       
        return redirect('foodMenu');

    }

    public function Reservation(Request $request){
        $data = new Reservation();
        // id	name	email	phone	guest	data	time	message	

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->data = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }
    public function viewReservation(){
        $Reservation = Reservation::all();

        return view('admin.adminReservation',compact('Reservation'));

    }

    public function Chefs(){


        return view('admin.adminChef');

    }
    public function Addchef(Request $request){
        $chef = new FoodChef();

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $chef->name = $request->name;
        $chef->image = $imagename;
        $chef->speciality = $request->speciality;

        $chef->save();
        $chefs = FoodChef::all();

        return redirect()->back()  ;
        // return $imagename;
    }
    public function showChef(){
        $chefs = FoodChef::all();

        return view('admin.adminChef',compact('chefs'));
        // return $chefs;
    }

    public function deleteChef($id){
        $chef = FoodChef::where('id',$id)->delete();

        return redirect()->back();
    } 

    public function deleteReservation($id){
        $Reservation = Reservation::where('id',$id)->delete();

        return redirect()->back();

    }
}
