<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\Status;
use App\Models\Payment;
use App\Models\Citie;
use App\Models\Department;
use App\Models\Role;
use App\Models\Home;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        
        // Для каждого заказа получим соответствующие имена
        foreach ($orders as $order) {
            $client = Client::find($order->client_id);
            $order->client_last_name = $client->last_name;
            $order->client_fitst_name = $client->fitst_name;
            $order->client_telephone = $client->telephone;
            $order->client_email = $client->email;

            $order->status_name = Status::find($order->status_id)->name;
            $order->payment_name = Payment::find($order->payment_id)->name;
            $order->citie_name = Citie::find($order->citie_id)->name;
            $order->department_name = Department::find($order->department_id)->name;
            // dd($orders);
        }
        return view('order.order', compact('orders'));
    }

    public function getClientData($telephone)
{
    try {
        $client = Client::where('telephone', $telephone)->first();

        if ($client) {
            return response()->json([
                'last_name' => $client->last_name,
                'fitst_name' => $client->fitst_name,
                'email' => $client->email,
            ]);
        }

        return response()->json(['error' => 'Клиент не найден'], 404);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $statuses = Status::all();
    $payments = Payment::all();
    $cities = Citie::all();
    $departments = Department::all();
    $clients = Client::all();
    $client_id = Client::all();
    return view('order.create', compact('statuses', 'payments', 'cities', 'departments', 'clients', 'client_id'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // // public function store(Order $request)
    // {
    //     $data = $request->validate([
    //         'last_name' => 'required|string',
    //         'fitst_name' => 'required|string',
    //         'telephone' => 'required|string',
    //         'email' => 'required|string',
    //         'status' => 'required|string',
    //         'payment' => 'required|string',
    //         'citie' => 'required|string',
    //         'department' => 'required|string',
    //     ]);
    //     Order::create($data);
    //     return redirect()->route('order.order');
    // }
    private function validateOrderData(Request $request)
    {
        return $request->validate([
            'client_id'=> 'required|string',
            'last_name' => 'required|string',
            'fitst_name' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|string',
            'status' => 'required|string',
            'payment' => 'required|string',
            'citie' => 'required|string',
            'department' => 'required|string',
            'client' =>'required|string',
        ]);
    }
    
    public function store(Request $request)
    {
        
        $data = $this->validateOrderData($request);
        
        Order::create($data);
        return redirect()->route('order.order');
    }
    
    public function update(Request $request, $id)
{
    $data = $this->validateOrderData($request);
    $order = Order::findOrFail($id);
    $order->update($data);
    return redirect()->route('order.order');

        try {
            $order = Order::find($id);
            $order->update($data);
        } catch (\Exception $e) {
            // Обработка ошибок, например, логирование или возврат с сообщением об ошибке
            return redirect()->back()->with('error', 'Failed to update order.');
        }        
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $order = Order::find($id);
    //     return view('order.edit', compact('order'));
    // }
    public function edit($id)
{
    $order = Order::findOrFail($id);
    return view('order.edit', compact('order'));
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $data = $request->validate([
    //         'last_name' => 'required|string',
    //         'fitst_name' => 'required|string',
    //         'telephone' => 'required|string',
    //         'email' => 'required|string',
    //         'status' => 'required|string',
    //         'payment' => 'required|string',
    //         'citie' => 'required|string',
    //         'department' => 'required|string',
    //     ]);
    //     $order = Order::find($id);
    //     $order->update($data);
        
    //     return redirect()->route('order.order');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $order = Order::find($id);
    //     $order->delete();
    //     return redirect()->route('order.order');
    // }
    public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();
    return redirect()->route('order.order');
}
}
