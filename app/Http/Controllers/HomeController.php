<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Foodchef;
use App\Models\Order;

class HomeController extends Controller
{
    // view index page
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        }

        $data = food::all();
        $data2 = foodchef::all();
        return view("home", compact("data", "data2"));
    }
    // redirects
    public function redirects()
    {
        $data = food::all();
        $data2 = foodchef::all();
        $usertype = Auth::user()->usertype;


        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', 'data2', 'count'));
        }
    }
    // adding to cart
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();


            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
    // displaying product in cart
    public function showcart(Request $request, $id)
    {
        $count = cart::where('user_id', $id)->count();
        if (Auth::id() == $id) {



            $data2 = cart::select('*')->where('user_id', '=', $id)->get();
            $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();



            return view('showcart', compact('count', 'data', 'data2'));
        } else {
            return redirect()->back;
        }
    }
    // removing food from cart
    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    // order confirm
    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key]; //everytime it will book different price for different food
            $data->quantity = $request->quantity[$key]; //everytime it will book different quantity for different food
            $data->name = $request->name;
            $data->table = $request->table;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }

        return redirect()->back();
    }
}
