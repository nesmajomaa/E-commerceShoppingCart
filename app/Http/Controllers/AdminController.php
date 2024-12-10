<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use App\Models\Collection;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('dashboard.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not correct.',
        ])->only('email');
    }

    public function registerPage()
    {
        return view('dashboard.auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|unique:admins,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();
        $token = Str::random(60);
        $admin = new Admin;
        $admin->name = $validated['name'];
        $admin->email = $validated['email'];
        $admin->password = bcrypt($validated['password']);
        $admin->remember_token = $token;
        $status = $admin->save();
        //Auth::login($admin);
        //$request->session()->regenerate();
        return redirect()->back()->with('status', $status); 
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->intended('/admin/login'); 
    }

    public function users()
    {
        $users = User::with('orders')->select('*')->withTrashed()->get();
        return view('dashboard.users')->with('users', $users);
    }
    public function orders()
    {
        $orders = Order::with('user')->select('*')->withTrashed()->get();
        return view('dashboard.orders')->with('orders', $orders);
    }
    public function collections()
    {
        $collections = Collection::select('*')->withTrashed()->get();
        return view('dashboard.collections')->with('collections', $collections);
    }
    public function products()
    {
        $products = Product::with('collection')->select('*')->withTrashed()->get();
        return view('dashboard.products')->with('products', $products);
    }
    public function orderItems($orderId)
    {
        $orderItems = OrderItem::where('order_id' , $orderId)->with('product')->get();
        return view('dashboard.orderItems')->with('orderItems', $orderItems);
    }
    public function index()
    {
        $collections = Collection::select('*')->withTrashed()->get();
        $orders = Order::with('user')->select('*')->withTrashed()->get();
        $products = Product::with('collection')->select('*')->withTrashed()->paginate(10);
        return view('dashboard.index')->with(['collections' => $collections, 'products' => $products, 'orders' => $orders]);
    }
}
