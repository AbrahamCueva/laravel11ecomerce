<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function orders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('user.orders', compact('orders'));
    }

    public function account_order_details($order_id)
    {
        $order = Order::where('user_id', Auth::user()->id)->find($order_id);
        $orderItems = OrderItem::where('order_id', $order_id)->orderBy('id')->paginate(12);
        $transaction = Transaction::where('order_id', $order_id)->first();
        return view('user.order-details', compact('order', 'orderItems', 'transaction'));
    }

    public function account_cancel_order(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = "canceled";
        $order->canceled_date = Carbon::now();
        $order->save();
        return back()->with("status", "Pedido Cancelada exitosamente");
    }

    public function account()
    {
        $user = Auth::user();
        return view('user.account', compact('user'));
    }

    public function update_user(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $request->id,
            'mobile' => 'required|digits:9',
            'password' => 'nullable|min:8|confirmed',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with('status', '¡Usuario actualizado exitosamente!');
    }

    public function address()
    {
        $user = Auth::user();
        $address = $user->address;
        return view('user.address', compact('user', 'address'));
    }
}
