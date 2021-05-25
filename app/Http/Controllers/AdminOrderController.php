<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;

class AdminOrderController extends Controller
{

    private $orders;
    private $customers;

    public function __construct(Order $order, Customer $customer)
    {
        $this->orders = $order;
        $this->customers = $customer;
    }

    public function index()
    {
        $orders = $this->orders->latest()->paginate(10);
        return view('admin.order.index', compact('orders'));
    }
}
