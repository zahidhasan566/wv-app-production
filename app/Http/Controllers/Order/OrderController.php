<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('order/index');
    }

    public function allOrder(Request $request){

        if($request->tabName ==='tab1'){
            return view('order/reviewAndPayment');
        }
        if($request->tabName ==='tab2'){
            return view('order/packageAndService');
        }
        if($request->tabName ==='tab3'){
            return view('order/personalData');
        }
        if($request->tabName ==='tab4'){
            return view('order/bookAddress');
        }
        if($request->tabName ==='tab5'){
            return view('order/reviewAndPayment2');
        }
        //dd($request);
    }
    public function packageAndService(){
        return view('order/packageAndService');
    }
}
