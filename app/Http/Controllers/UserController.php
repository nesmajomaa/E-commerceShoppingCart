<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Collection;
use App\Models\Cart;
use App\Models\Favorite;
use App\Http\Controllers\Admin\CartController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginPage()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/user');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not correct.',
        ])->only('email');
    }

    public function registerPage()
    {
        return view('user.auth.register');
    }

    public function register(Request $request)
    {
        //validate fields
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();
        $token = Str::random(60);

        $user = new User;
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->remember_token = $token;
        $user->save();
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/user'); 
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->intended('/'); 
    }

    public function index()
    {
        $recentProducts = Product::select('*')->paginate(10);
        $collections = Collection::select('*')->paginate(10);
        $topSellingProducts = Product::orderBy('sales', 'desc')->take(10)->get();
        return view('user.index')->with(['recentProducts' => $recentProducts, 'collections' => $collections, 'topSellingProducts' => $topSellingProducts]);
    }

    public function authorizedUser()
    {
        $user = User::find(Auth::guard('user')->user()->id);
        $products = Product::select('*')->paginate(10);
        $collections = Collection::select('*')->paginate(10);
        $carts = $user->carts()->with('cartProduct')->get();
        $subTotal = $carts->sum('total_price');
        $topSellingProducts = Product::orderBy('sales', 'desc')->take(5)->get();
        $favorites = $user->favorites()->with('favoriteProduct')->get();

        return view('user.authorizedUser')->with(['products' => $products, 'collections' => $collections, 'carts' => $carts, 'topSellingProducts' => $topSellingProducts, 'subTotal' => $subTotal, 'favorites' => $favorites]);
    }

}
