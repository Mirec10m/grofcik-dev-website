<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Admin\AdminController;
use App\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrdersController extends AdminController
{

    public function index() : Factory | View | Application
    {
        $orders = Order::factory(50)->make();

        return view('admin.superadmin.orders.index', compact('orders'));
    }

    public function show() : Factory | View | Application
    {
        $order = Order::factory()->make();
        $order_items = [];

        return view('admin.superadmin.orders.show', compact('order', 'order_items'));
    }

    public function invoice() : Response
    {
        $order = Order::factory()->make();
        $order_items = [];

        $pdf = Pdf::loadView('admin.superadmin.orders.invoice', compact('order', 'order_items'));

        return $pdf->stream();
    }

    public function destroy() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Vymazaná', "Objednávka <b>202300000</b> bola vymazaná");

        return redirect()->route('superadmin.orders.index');
    }

    public function status() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Zmenený', "Status objednávky <b>202300000</b> bola zmenený");

        return back();
    }

}
