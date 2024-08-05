<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CongDiemController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
    //yc1:

    public function yeucau1()
    {
        $users = DB::table('users')->get();
        return view('yeucau1', compact('users'));
    }
    //yc2:

    public function yeucau2()
    {
        $users = DB::table('users')
        ->where('age', '>', 25)
        ->get();
        return view('yeucau2', compact('users'));
    }
    //yc3:
    public function yeucau3()
    {
        $users = DB::table('users')
           ->where('age', '>', 25)
           ->where('status', 'active')
           ->get();

        return view('yeucau3', compact('users'));
    }
    //yc4
    public function yeucau4()
    {
        $users = DB::table('users')
        ->orderBy('age', 'desc')
        ->get();
        return view('yeucau4', compact('users'));
    }
    //yc5
    public function yeucau5()
    {
        $products = DB::table('product')
        ->limit(10)
        ->get();
        return view('yeucau5', compact('products'));
    }
    //yc6
    public function yeucau6()
    {
        $orders = DB::table('orders')
            ->where('status', 'Hoàn thành')
            ->orWhere('total', '>', 100)
            ->get();
        return view('yeucau6', compact('orders'));

    }
    //yc7
    public function yeucau7()
    {
        $customers = DB::table('customers')
        ->where('name', 'like', '%John%')
        ->get();
        return view('yeucau7', compact('customers'));
    }
    // yc8
    public function yeucau8()
    {
        $sales = DB::table('sales')
        ->whereBetween('amount', [1000, 5000])
        ->get();
        return view('yeucau8', compact('sales'));
    }
    // yc9
    public function yeucau9()
    {
        $employees = DB::table('employees')
        ->whereIn('department_id', [1, 2, 3])
        ->get();
        return view('yeucau9', compact('employees'));
    }
    // yc10
    public function yeucau10()
    {
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.*', 'customers.name as customer_name', 'customers.email as customer_email')
            ->get();
        return view('yeucau10', compact('orders'));
    }
    // yc11
    public function yeucau11()
    {
        $orderItems = DB::table('order_items')
            ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->get();
        return view('yeucau11', compact('orderItems'));
    }
    // yc12
    public function yeucau12()
    {
        DB::table('orders')
            ->where('status', 'Đang xử lý ')
            ->update(['status' => 'Đã vận chuyển']);
        $orders = DB::table('orders')->get();
        return view('yeucau12', compact('orders'));
    }

    // yc13
    public function yeucau13()
    {
         DB::table('logs')
        ->where('created_at', '<', '2020-01-01')
        ->delete();

        $logs = DB::table('logs')->get();
        return view('yeucau13', compact('logs'));
    }
    // yc14
    public function yeucau14()
    {
        DB::table('product')->insert([
            'name' => 'Product Name',
            'price' => 10000,
            'quantity' => 10,
        ]);
        $products = DB::table('product')->get();
        return view('yeucau14', compact('products'));
    }
    // yc15
    public function yeucau15()
    {
        $users = DB::table('users')
            ->whereRaw('MONTH(birth_date) = ?', [5])
            ->get();
        return view('yeucau15', compact('users'));
    }
}
