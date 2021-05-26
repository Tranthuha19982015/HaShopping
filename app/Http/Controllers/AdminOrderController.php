<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;

class AdminOrderController extends Controller
{
    private $customers;
    private $orders;
    private $orderDetails;

    public function __construct(Customer $customer, Order $order, OrderDetail $orderDetail)
    {
        $this->customers = $customer;
        $this->orders = $order;
        $this->orderDetails = $orderDetail;

    }

    public function index()
    {
        $orders = $this->orders->latest()->paginate(10);
        return view('admin.order.index', compact('orders'));
    }

    public function detail($id)
    {
        $orders = $this->orders->find($id);
        $order = \DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
//            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->where('orders.id', '=', $id)
            ->get();
        return view('admin.order.detail', compact('orders', 'order'));
    }
}
